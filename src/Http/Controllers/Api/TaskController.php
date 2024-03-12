<?php

namespace AliSalehi\Task\Http\Controllers\Api;

use AliSalehi\Task\Http\Controllers\Api\Resources\TaskCollection;
use AliSalehi\Task\Models\Task;
use AliSalehi\Task\Policies\TaskPolicy;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use AliSalehi\Task\Repositories\TaskRepositoryInterface;
use AliSalehi\Task\Http\Controllers\Api\Requests\StoreRequest;
use AliSalehi\Task\Http\Controllers\Api\Resources\TaskResource;

class TaskController extends ApiController
{
    public function __construct(private readonly TaskRepositoryInterface $taskRepository)
    {
    }
    
    public function index(Request $request): JsonResponse
    {
        $tasks = $this->getFilteredTasks($request);
        //use can use `TaskResource::toPaginator($tasks, $request);` to get pagination laravel format
        $paginator = TaskCollection::make($tasks);
        return $this->successResponse($paginator);
    }
    
    public function show(Task $task): JsonResponse
    {
        TaskPolicy::allows($task);
        $data = TaskResource::make($this->taskRepository->find($task));
        return $this->successResponse($data);
    }
    
    public function store(StoreRequest $request): JsonResponse
    {
        $this->taskRepository->create($request->all());
        return $this->successResponse([], 'task added successfully');
    }
    
    public function update(Task $task, StoreRequest $request): JsonResponse
    {
        TaskPolicy::allows($task);
        try {
            $this->taskRepository->update($task, $request->all());
            return $this->successResponse([], 'task updated successfully');
        } catch (ModelNotFoundException $e) {
            return $this->errorResponse([], 'Task not found or updating failed.', Response::HTTP_NOT_FOUND);
        }
    }
    
    public function destroy(Task $task): JsonResponse
    {
        TaskPolicy::allows($task);
        try {
            $this->taskRepository->delete($task);
            return $this->successResponse([], 'success delete');
        } catch (ModelNotFoundException $e) {
            return $this->errorResponse([], 'Task not found or deletion failed.', Response::HTTP_NOT_FOUND);
        }
    }
    
    private function getFilteredTasks(Request $request)
    {
        $status = $request->get('status');
        
        if ($status == 'completed') {
            return $this->taskRepository->getTasksByCompletionStatus();
        } elseif ($status == 'incomplete') {
            return $this->taskRepository->getTasksByInCompletionStatus();
        }
        
        return $this->taskRepository->all();
    }
}

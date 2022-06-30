<?php
declare(strict_types=1);

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Services\PolicyService\PolicyService;

class PolicyController extends BaseController
{
    private PolicyService $policyService;
  
    public function __construct($policyService)
    {
        $this->policyService = $policyService;
    }

    public function getAllPolicies()
    {
        $policies = $this->policyService->getAllPolicies();

        return $policies;
    }
}

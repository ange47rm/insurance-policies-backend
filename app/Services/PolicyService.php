<?php 

namespace App\Services\PolicyService;
use App\Modules\Users\Repositories\PolicyRepository;
use IPolicyService;

class PolicyService implements IPolicyService{

    private PolicyRepository $policyRepository;
  
    public function __construct($policyRepository)
    {
        $this->policyRepository = $policyRepository;
    }

    public function getAllPolicies()
    {
        $policies = $this->policyRepository->getAllPolicies();

        return $policies;
    }

}

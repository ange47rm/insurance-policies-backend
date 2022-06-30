<?php
declare(strict_types=1);
namespace App\Modules\Users\Repositories;

use App\Models\Policy;
use Illuminate\Database\Eloquent\Collection;
use IPolicyRepository;

class PolicyRepository implements IPolicyRepository
{
    /**
     * @return Collection
     */
    public function getAllPolicies(): Collection
    {
        return Policy::all();
    }
}
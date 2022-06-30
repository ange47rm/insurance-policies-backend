<?php 

interface IPolicyRepository
{
    /**
     * Return all items
     * @return Collection|null
     */
    public function getAllPolicies();
}
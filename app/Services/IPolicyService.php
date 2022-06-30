<?php 

interface IPolicyService
{
    /**
     * Return all items
     * @return Collection|null
     */
    public function getAllPolicies();
}
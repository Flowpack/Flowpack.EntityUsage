# Generic entity usage tracking API for Neos Flow

## Concept

This package provides a generic usage tracking for any kind of entity in a Neos Flow application.
An additional package like `Flowpack.EntityUsage.DatabaseStorage` is required for
storing those relations.

For each kind of entity a package needs to provide the mechanisms to register
and unregister usage. F.e. `Flowpack.Neos.AssetUsage` provides this for 
assets in Neos CMS.

## Creating your own entity storage

    My.Package:MyEntityUsageService:
        className: Flowpack\EntityUsage\Servce\EntityUsageService
        scope: singleton
        arguments:
            1:
                value: 'my_service_id'

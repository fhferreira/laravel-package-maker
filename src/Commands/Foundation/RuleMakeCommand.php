<?php

namespace Naoray\LaravelPackageMaker\Commands\Foundation;

use Naoray\LaravelPackageMaker\Traits\HasNameAttribute;
use Naoray\LaravelPackageMaker\Traits\CreatesPackageStubs;
use Illuminate\Foundation\Console\RuleMakeCommand as MakeRule;

class RuleMakeCommand extends MakeRule
{
    use CreatesPackageStubs, HasNameAttribute;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:package:rule';

    /**
     * Get the destination class path.
     *
     * @return string
     */
    protected function resolveDirectory()
    {
        return $this->getDirInput().'/src';
    }
}

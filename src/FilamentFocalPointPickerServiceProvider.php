<?php

namespace Johncarter\FilamentFocalPointPicker;

use Filament\Facades\Filament;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentFocalPointPickerServiceProvider extends PackageServiceProvider
{

    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-focal-point-picker')
            ->hasAssets()
            ->hasViews()
            ->hasTranslations();
    }
    public function packageBooted()
    {
       FilamentAsset::register([
                Css::make('filament-focal-point-picker',__DIR__ . '/../resources/dist/css/filament-focal-point-picker.css')
        ],'Johncarter/FilamentFocalPointPicker'

        );
        parent::packageBooted(); // TODO: Change the autogenerated stub
    }
}

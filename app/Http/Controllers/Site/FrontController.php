<?php
namespace App\Http\Controllers\Site;

use Citmatel\Hosting\CommercialPackageRepository;
use Citmatel\Hosting\Sections\Sections;
use Citmatel\Hosting\Sections\SectionsRepository;
use Citmatel\Support\Http\Controllers\Controller;

class FrontController extends Controller
{
    function __construct(
        CommercialPackageRepository $commercialPackageRepository,
        SectionsRepository $sectionsRepository
    ) {
        $this->commercialPackageRepository = $commercialPackageRepository;
        $this->sectionRepository = $sectionsRepository;
    }

    function index()
    {
        $commercialPackages = $this->commercialPackageRepository->where('active', '1')->get();
        $mainSection = $this->sectionRepository->where('name','main')->first();
        return view('site.index')->with('commercialPackages', $commercialPackages)->with('mainSection', $mainSection);
    }

    function  secciones()
    {
        $section = $this->sectionRepository;
        return view('site.index')->with('sections', $section);
    }

    function showCommercialPackageRequest($commercialPackageId)
    {
//        $commercialPackage = $this->commercialPackageRepository->where('nam);
        return view('site.commercial-package-request')/*->with('commercialPackage', $commercialPackage)*/
            ;
    }
}
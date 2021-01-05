<?php
/**
 * Created by PhpStorm.
 * User: melis
 * Date: 26/06/2019
 * Time: 13:47
 */

namespace App\Http\Controllers\Site;

use Citmatel\Hosting\Applications\ApplicationRepository;
use Citmatel\Hosting\CommercialPackageRepository;

use Citmatel\Hosting\Domains\DomainRepository;
use Citmatel\Hosting\Pages\PageRepository;
use Citmatel\Hosting\Responsables\AdministratorRepository;
use Citmatel\Hosting\Responsables\WebmasterRepository;
use Citmatel\Hosting\Technologies\DataBaseTypeRepository;
use Citmatel\Hosting\Technologies\SiteTypeRepository;
use Citmatel\Hosting\Technologies\TechnologyRepository;
use Citmatel\Support\Http\Controllers\Controller;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{

    function __construct(
        ApplicationRepository $applicationRepository,
        TechnologyRepository $technologyRepository,
        SiteTypeRepository $siteTypeRepository,
        DataBaseTypeRepository $dataBaseTypeRepository,
        AdministratorRepository $administratorRepository,
        WebmasterRepository $webmasterRepository,
        DomainRepository $domainRepository,
        CommercialPackageRepository $commercialPackageRepository,
        PageRepository $pageRepository


    ) {
        $this->applicationRepository = $applicationRepository;
        $this->technologyRepository = $technologyRepository;
        $this->siteTypeRepository = $siteTypeRepository;
        $this->dataBaseTypeRepository = $dataBaseTypeRepository;
        $this->administratorRepository = $administratorRepository;
        $this->webmasterRepository = $webmasterRepository;
        $this->domainRepository = $domainRepository;
        $this->commercialPackageRepository = $commercialPackageRepository;
        $this->pageRepository = $pageRepository;


        $databaseTypes = $this->dataBaseTypeRepository->listBy('id', 'name');
        $siteTypes = $this->siteTypeRepository->listBy('id', 'name');


        $technologies = $this->technologyRepository->retrieveSystemOpereatingAndTechnology();



        view()->share('databaseTypes', $databaseTypes);
        view()->share('siteTypes', $siteTypes);
        view()->share('technologies', $technologies);


    }

    public function create($slug)
    {
        $commercialPackage = $this->commercialPackageRepository->where('name', $slug)->first();
        return view('site.applications.create')
            ->with('commercialPackage', $commercialPackage);
    }

    public function edit($id)
    {
        $entity = $this->applicationRepository->findOrFail($id);
        return view('site.applications.create');
    }

    public function show($id)
    {
        $entity = $this->applicationRepository->findOrFail($id);
        return view('site.applications.show');
    }

    public function showAll()
    {
        $entity = $this->applicationRepository->all();
        return view('site.solicitud.list');
    }

    public function showPage()
    {
        $page = $this->pageRepository->findOrFail(1);
        return view('site.page._main_page')
        ->with('page', $page);
    }

    function store(Request $request)
    {
        //echo "HOLAAAAAA";

//        try {
            $entity = $this->applicationRepository->createAndStore($request->all());
//        } catch (Exception $exception) {
//            return back()->withError($exception->getMessage())->withInput();
//        }
        if ($entity instanceof Model) {
            return redirect()->to(url('/solicitudes-hospedaje/' . $entity->id . '/edit'));
        }
        return redirect()->back();
    }




}
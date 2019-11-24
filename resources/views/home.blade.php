@extends('layouts.app')

@section('content')
<!-- <div class="container"> -->
<!-- container to container-fluid -->
<div class="container-fluid">
    <!-- <div class="row mt-2">
    </div> -->
    <div class="row justify-content-center">
        <div class="col-md-3" style="min-width: 300px;">
            <div class="card bg-light mb-3">
                <div class="card-header "><i class="pl-4 pr-2 fas fa-home"></i>Synergy Links
                </div>
                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
                    <!-- <div class="list-group"> -->
                    <a href="http://192.168.10.20/" target="_blank"
                        class="list-group-item list-group-item-action"><i class="pr-3 far fa-building"></i>Synergy IT Internal Systems</a>
                    <a href="https://192.168.10.18/admin" target="_blank"
                        class="list-group-item list-group-item-action"><i class="pr-3 fas fa-user-lock"></i>Synergy IT CRM</a>
                    <a href="https://rulinkcrm/synergyit.ca" target="_blank"
                        class="list-group-item list-group-item-action"><i class="pr-3 fas fa-users"></i>Rulink CRM</a>
                    <a href="http://synergytechportal.com/index.php/portal/alltask?ticket=open" target="_blank"
                        class="list-group-item list-group-item-action"><i class="pr-3 fas fa-ticket-alt"></i>Ticketing Portal</a>
                    <a href="http://192.168.10.34/cms" target="_blank"
                        class="list-group-item list-group-item-action"><i class="pr-3 fas fa-sliders-h"></i>Config System</a>
                    <a href="http://192.168.10.18/bigbasket/admin" target="_blank"
                        class="list-group-item list-group-item-action"><i class="pr-3 fas fa-shopping-basket"></i>Bigbasket CRM</a>
                    <a href="http://sharepoint/sites/synergyit" target="_blank"
                        class="list-group-item list-group-item-action"><i class="pr-3 fas fa-share-alt-square"></i>Internal Sharepoint</a>
                    <a href="http://www.surveyballot.com/" target="_blank"
                        class="list-group-item list-group-item-action"><i class="pr-3 fas fa-poll"></i>Survey Ballot</a>
                    <a href="https://hiretechs.ca/resume.php" target="_blank"
                        class="list-group-item list-group-item-action"><i class="pr-3 far fa-file"></i>Hire Techs resume upload</a>
                    <a href="" tabindex="-1" aria-disabled="true"
                        class="list-group-item list-group-item-action disabled"><i class="pr-2 far fa-bell-slash"></i>Disabled</a>
                </div>
                <!-- <div class="list-group">
                        <a class="list-group-item list-group-item-action " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown link
                        </a>
                        <span class="dropdown-item-text">Dropdown item text</span>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                            <a href="http://192.168.10.20/" target="_blank" class="list-group-item list-group-item-action">
                            Synergy IT Internal Systems
                            </a>
                            <a href="http://192.168.10.18/admin" target="_blank" class="list-group-item list-group-item-action">Synergy IT CRM</a>
                            <a href="http://rulinkcrm/synergyit.ca" target="_blank" class="list-group-item list-group-item-action">Rulink CRM</a>
                            <a href="http://synergytechportal.com/" target="_blank" class="list-group-item list-group-item-action">Ticketing Portal</a>
                            <a href="http://192.168.10.34/cms" target="_blank" class="list-group-item list-group-item-action">Config System</a>
                            <a href="http://192.168.10.18/bigbasket/admin" target="_blank" class="list-group-item list-group-item-action">Bigbasket CRM</a>
                            <a href="http://sharepoint/sites/synergyit" target="_blank" class="list-group-item list-group-item-action">Internal Sharepoint</a>
                            <a href="http://www.surveyballot.com/" target="_blank" class="list-group-item list-group-item-action">Survey Ballot</a>
                            <a href="https://hiretechs.ca/resume.php" target="_blank" class="list-group-item list-group-item-action">Hire Techs resume upload</a>
                            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Disabled</a>
                        </div>
                    </div> -->
                <!-- </div> -->
            </div>
        </div>
        <div class="col-md-3" style="min-width: 300px;">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <a target="_blank" class="list-group-item list-group-item-action" href="./tech1/index.html">Tech Site</a>
					<a target="_blank" class="list-group-item list-group-item-action" href="https://docs.nexcess.net/article/how-to-configure-your-local-email-client.html">nexcess Mail Configuration</a>    
					<a target="_blank" class="list-group-item list-group-item-action" href="https://one-us.comodo.com/app/msp/login#/dashboard/overview">Comodo One MSP</a>
					<a target="_blank" class="list-group-item list-group-item-action" href="https://www.cincoze.com/goods.php?cid=4">Cincoze Products</a>
					<a target="_blank" class="list-group-item list-group-item-action" href="https://www.google.com">Search</a>
					<a target="_blank" class="list-group-item list-group-item-action" href="https://www.stationx.net/canarytokens">Canary Tokens</a>
                    <a target="_blank" class="list-group-item list-group-item-action"  href="https://192.168.10.167/">VCenter</a>
					<a target="_blank" class="list-group-item list-group-item-action"  href="https://radracr.nexcess.net:2443/roundcube/">Webmail</a>
					<a target="_blank" class="list-group-item list-group-item-action"  href="https://radracr.nexcess.net:2443/horde/">Webmail Horde</a>
					<a target="_blank" class="list-group-item list-group-item-action"  href="https://invoice-generator.com">Invoice 1</a>
					<a target="_blank" class="list-group-item list-group-item-action"  href="https://accounting.waveapps.com">Invoice 2</a>

                    <a target="_blank" class="list-group-item list-group-item-action"  href="https://gateway.trios.com/trios-student/index.html">trios gateway</a>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="min-width: 300px;">
            <div class="card">
                <div class="card-header">Dashboard</div>

                    <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <a target="_blank" class="list-group-item list-group-item-action"  href="https://ttorial.com/courses/it-software">Ttorial.com</a>
					<a target="_blank" class="list-group-item list-group-item-action"  href="https://www.learningcrux.com/">LearningCrux.com</a>
					<a target="_blank" class="list-group-item list-group-item-action"  href="https://www.freetutorials.eu/">FreeTutorials.eu</a>
					<a target="_blank" class="list-group-item list-group-item-action"  href="https://www.freecoursesonline.me/">FreeCourseOnline.me</a>
					<a target="_blank" class="list-group-item list-group-item-action"  href="https://www.tutorialspoint.com/csharp">C# - tutorialspoint.com</a>
					<a target="_blank" class="list-group-item list-group-item-action"  href="https://www.codeproject.com/Articles/1094079/An-advanced-introduction-to-Csharp-Lecture-Notes-P">C# - codeproject.com</a>
					<a target="_blank" class="list-group-item list-group-item-action"  href="https://ourcodeworld.com/articles/read/441/how-to-use-material-design-controls-with-c-in-your-winforms-application">C# - Material</a>
					<a target="_blank" class="list-group-item list-group-item-action"  href="https://blogs.msdn.microsoft.com/cbtham/2017/03/07/diy-build-your-own-vpn-with-microsoft-azure-oss/">DIY VPN</a>
					<a target="_blank" class="list-group-item list-group-item-action"  href="https://portal.azure.com">Azure.com</a>
					<a class="list-group-item list-group-item-action"href="mat">Material</a>
					<a target="_blank" class="list-group-item list-group-item-action"  href="http://www.windowsafg.com/index.html">Windows Answer File Generator</a>
					<a target="_blank" class="list-group-item list-group-item-action"  href="http://www.flounder.com/csharp_color_table.htm">C# Color Coding</a>


                </div>
            </div>
        </div>
        <div class="col-md-3" style="min-width: 300px;">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <a target="_blank" class="list-group-item list-group-item-action"  href="https://docs.microsoft.com/en-us/windows-server/administration/windows-commands/windows-commands#BKMK_CmdRef">Windows Commands</a>
					<a target="_blank" class="list-group-item list-group-item-action"  href="./res/Windows Commands.pdf">Windows Commands - pdf</a>
                    <a target="_blank" class="list-group-item list-group-item-action"  href="https://index.azurewebsites.net/">Index.Azurewebsites.net</a>
					<a target="_blank" class="list-group-item list-group-item-action"  href="https://awap.azurewebsites.net/">Awap.Azurewebsites.net</a>
					<a target="_blank" class="list-group-item list-group-item-action"  href="https://kamalmohan.github.io/">Github.io</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3" style="min-width: 300px;">
            <div class="card">
                <div class="card-header">Dashboard</div>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Open modal
                    </button>

                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Modal Heading</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            Modal body..
                            <img src="images/demo.jpg" class="rounded" alt="Cinque Terre">
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                        </div>
                    </div>
                    </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-3" style="min-width: 300px;">
            <div class="card">
                <div class="card-header">Dashboard</div>

            </div>
        </div>
        <div class="col-md-3" style="min-width: 300px;">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                </div>
            </div>
        </div>
        <div class="col-md-3" style="min-width: 300px;">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

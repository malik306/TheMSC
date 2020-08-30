<div class="container  mt-2 d-none"  id="apply">
    <h3 class="text-center text-uppercase">Apply Online</h3>
    <div class="bg-gray-5 rounded p-1 container-fluid card mb-2"></div>
    <h4 class="border container border-2 border-dark rounded p-2 d-inline-block card bg-info h5 fa fa-check-square"><span class="mr-1"></span> Apply Online</h4>
    <div class="border border-2 border-dark rounded p-2 card">
        <ul class="list-group p-2">
            <li class="fas fa-angle-double-right cursor-pointer p-1 text-capitalize" data-toggle="modal" data-target="#afva"><span class="mr-2"></span>Apply For Vacancy or Admission </li>
            @includeIf('user.candidate-login')
            {{-- <li class="fas fa-angle-double-right cursor-pointer p-1 text-capitalize" data-toggle="modal" data-target="#afa"><span class="mr-2"></span>Apply For Admission</li>
            @include('admission.admission-login')

            <ul class="collapse" id="afa">
               <li class="d-block text-capitalize fas fa-angle-double-right p-1"><a href="{{route('admission1.create')}}"><span class="mr-2"></span> if you don't have a account</a></li>
               <li class="d-block text-capitalize fas fa-angle-double-right p-1"><a href="{{route('admission2.create')}}"><span class="mr-2"></span> I already have a account</a></li>
            </ul>
            --}}

            <li class="fas fa-angle-double-right cursor-pointer p-1 text-capitalize"><a href="{{route('feedback.create')}}"><span class="mr-2"></span>Apply For Feedback or others</a> </li>
        </ul>
    </div>
</div>

@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$trackMeet->trackMeetName->meet_name}}</h5>
              <h6 class="card-subtitle mb-2 text-muted"></h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
                   <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Gender</th>
                          <th scope="col">Division</th>
                          <th scope="col">Place</th>
                          <th scope="col">Points</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($trackMeet->trackTeamResults as $teamResult)
                        <tr>
                          <td>{{$teamResult->gender->gender}}</td>
                          <td>{{$teamResult->raceDivision->name}}</td>
                          <td>{{$teamResult->place}}/{{$teamResult->number_teams}}</td>
                          <td>{{$teamResult->points}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    </div>     
        </div>
    </div>
</div>
@endsection
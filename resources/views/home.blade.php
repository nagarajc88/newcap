@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
       <div class="col-md-2">
        <div class="panel panel-default">
           <div class="panel-heading">Dashboard</div>
           <div class="panel-body">
              <div class="wrapper">
                <!-- Sidebar -->
                <nav id="sidebar">
                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                                <li>
                                    <a href="#">Home 1</a>
                                </li>
                                <li>
                                    <a href="#">Home 2</a>
                                </li>
                                <li>
                                    <a href="#">Home 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                <li>
                                    <a href="#">Page 1</a>
                                </li>
                                <li>
                                    <a href="#">Page 2</a>
                                </li>
                                <li>
                                    <a href="#">Page 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Portfolio</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
          </div>
       </div>
       </div>
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Php Outlook Sample</div>

                <div class="panel-body">
                   <div class="jumbotron">
                      <h1>PHP Outlook Sample</h1>
                      <p>This example shows how to get an OAuth token from Azure using the <a href="https://docs.microsoft.com/en-us/azure/active-directory/develop/active-directory-v2-protocols-oauth-code" target="_blank">authorization code grant flow</a> and to use that token to make calls to the Outlook APIs in the <a href="https://developer.microsoft.com/en-us/graph/" target="_blank">Microsoft Graph</a>.</p>
                      <p>
                        <a class="btn btn-lg btn-primary" href="/signin" role="button" id="connect-button">Connect to Outlook</a>
                      </p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-md-4">
                       <canvas id="myChart-one" width="400" height="400"></canvas>
                    </div>
                    <div class="col-md-4">
                      <canvas id="myChart-two"></canvas>
                    </div>
                    <div class="col-md-4">
                      <canvas id="myChart-three"></canvas>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <ul>
                    <li><a href="#"> Level 1 </a>
                        <ul>
                        <li><a href="#"> Level 1.1 </a>
                            <ul>
                            <li><a href="#"> Level 1.1.1 </a></li>
                            <li><a href="#"> Level 1.1.2 </a></li>
                            <li><a href="#"> Level 1.1.3 </a></li>
                            <li><a href="#"> Level 1.1.4 </a></li>
                            </ul>
                        </li>
                        <li><a href="#"> Level 1.2 </a>
                            <ul>
                            <li><a href="#"> Level 1.2.1 </a></li>
                            <li><a href="#"> Level 1.2.2 </a></li>
                            <li><a href="#"> Level 1.2.3 </a></li>
                            <li><a href="#"> Level 1.2.4 </a></li>
                            </ul>
                        </li>
                        <li><a href="#"> Level 1.3 </a>
                            <ul>
                            <li><a href="#"> Level 1.3.1 </a></li>
                            <li><a href="#"> Level 1.3.2 </a></li>
                            <li><a href="#"> Level 1.3.3 </a></li>
                            <li><a href="#"> Level 1.3.4 </a></li>
                            </ul>
                        </li>
                        </ul>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Category Wise Task</div>

                <div class="panel-body">
                    <div class="col-md-3">
                    <ul>
                        <li><a href="#"> Level 1.1 </a>
                            <ul>
                            <li><a class="level"> Level 1.1.1 </a></li>
                            <li><a class="level"> Level 1.1.2 </a></li>
                            <li><a class="level"> Level 1.1.3 </a></li>
                            <li><a class="level"> Level 1.1.4 </a></li>
                            </ul>
                        </li>
                        <li><a href="#"> Level 1.2 </a>
                            <ul>
                            <li><a class="level"> Level 1.2.1 </a></li>
                            <li><a class="level"> Level 1.2.2 </a></li>
                            <li><a class="level"> Level 1.2.3 </a></li>
                            <li><a class="level"> Level 1.2.4 </a></li>
                            </ul>
                        </li>
                        <li><a href="#"> Level 1.3 </a>
                            <ul>
                            <li><a class="level"> Level 1.3.1 </a></li>
                            <li><a class="level"> Level 1.3.2 </a></li>
                            <li><a class="level"> Level 1.3.3 </a></li>
                            <li><a class="level"> Level 1.3.4 </a></li>
                            </ul>
                         </li>
                        </ul>
                      </li>
                    </ul>
                   </div>
                    <div class="col-md-7" id="dynamic_table">
                      <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                          </tr>
                        </thead>
                        <tbody id="rows">
                          <tr>
                            <td>Default</td>
                            <td>Defaultson</td>
                            <td>def@somemail.com</td>
                          </tr>      
                          <tr class="success">
                            <td>Success</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                          </tr>
                          <tr class="danger">
                            <td>Danger</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                          </tr>
                          <tr class="info">
                            <td>Info</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                          </tr>
                          <tr class="warning">
                            <td>Warning</td>
                            <td>Refs</td>
                            <td>bo@example.com</td>
                          </tr>
                          <tr class="active">
                            <td>Active</td>
                            <td>Activeson</td>
                            <td>act@example.com</td>
                          </tr>
                          <tr class="active">
                            <td>Active</td>
                            <td>Activeson</td>
                            <td>act@example.com</td>
                          </tr>
                          <tr class="active">
                            <td>Active</td>
                            <td>Activeson</td>
                            <td>act@example.com</td>
                          </tr>
                          <tr class="active">
                            <td>Active</td>
                            <td>Activeson</td>
                            <td>act@example.com</td>
                          </tr>
                          <tr class="active">
                            <td>Active</td>
                            <td>Activeson</td>
                            <td>act@example.com</td>
                          </tr>
                          <tr class="active">
                            <td>Active</td>
                            <td>Activeson</td>
                            <td>act@example.com</td>
                          </tr>
                          <tr class="active">
                            <td>Active</td>
                            <td>Activeson</td>
                            <td>act@example.com</td>
                          </tr>
                          <tr class="active">
                            <td>Active</td>
                            <td>Activeson</td>
                            <td>act@example.com</td>
                          </tr>
                          <tr class="active">
                            <td>Active</td>
                            <td>Activeson</td>
                            <td>act@example.com</td>
                          </tr>
                          <tr class="active">
                            <td>Active</td>
                            <td>Activeson</td>
                            <td>act@example.com</td>
                          </tr>
                          <tr class="active">
                            <td>Active</td>
                            <td>Activeson</td>
                            <td>act@example.com</td>
                          </tr>
                          <tr class="active">
                            <td>Active</td>
                            <td>Activeson</td>
                            <td>act@example.com</td>
                          </tr>
                          <tr class="active">
                            <td>Active</td>
                            <td>Activeson</td>
                            <td>act@example.com</td>
                          </tr>
                          <tr class="active">
                            <td>Active</td>
                            <td>Activeson</td>
                            <td>act@example.com</td>
                          </tr>
                          <tr class="active">
                            <td>Active</td>
                            <td>Activeson</td>
                            <td>act@example.com</td>
                          </tr>
                          <tr class="info">
                            <td>Info</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                          </tr>
                          <tr class="warning">
                            <td>Warning</td>
                            <td>Refs</td>
                            <td>bo@example.com</td>
                          </tr>
                          <tr class="active">
                            <td>Active</td>
                            <td>Activeson</td>
                            <td>act@example.com</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


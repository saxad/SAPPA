@extends('layouts.app')

@section('content')




<!--main content start-->


<section class="wrapper site-min-height">
  <h3><i class="fa fa-angle-right"></i>Administration</h3>
  <!-- page start-->
  <div class="tab-pane">
    <div class="row mt">
      <div class="col-lg-6">
        <div class="content-panel">
          <button data-toggle="modal" data-target="#adduser" class="btn btn-theme" type="button" style="float:right;"><i class="fa fa-cog"></i> ajoutez un utilisateur</button>
          <!-- modal user form -->
          <div class="modal fade" id="adduser">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                  </button>
                  <h4 class="modal-title">ajout d'un nouveau utilisateur</h4>
                </div>
                <div class="modal-body">
                  <form class="col" action="test.php">
                    <div class="form-group">
                      <label for="nom" class="form-control-label">Nom</label>
                      <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom">
                    </div>
                    <div class="form-group">
                      <label for="email" class="form-control-label">Email</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email">
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <em></em>
                </div>
              </div>
            </div>
          </div>
          <!-- modal user form -->
          <h4><i class="fa fa-angle-right"></i> utilisateurs</h4>
          <div class="panel-body text-center">
            <table class="table table-striped table-advance table-hover">
              <thead>
                <tr>
                  <th><i class="fa fa-bullhorn"></i> photo</th>
                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> nom</th>
                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> prenom</th>
                  <th><i class="fa fa-bookmark"></i> NNI</th>
                  <th><i class=" fa fa-edit"></i> droits</th>
                  <th>actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td>
                    <img src="{{$user->picture}}" alt="user picture" width="50px" height="50px">

                  </td>
                  <td class="hidden-phone">{{$user->firstname}} </td>
                  <td class="hidden-phone">{{$user->firstname}} </td>
                  <td>{{$user->nni}} </td>
                  <td>
                    <span class="label label-info label-mini">{{$user->hiararchy}}</span>
                    <span class="label label-success label-mini">admin</span>
                  </td>
                  <td>

                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>

                    <button type="submit" class="btn btn-danger btn-xs"> <a class="delete-user" href="/sappaDev/sappa/public/administration/deleteUser/{{$user->id}}"><i class="fa fa-trash-o "></i></a> </button>
                  </td>
                </tr>
                @endforeach
            </table>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="content-panel">
          <div>

            <button data-toggle="modal" data-target="#addtool" class="btn btn-theme" type="button" style="float:right;"><i class="fa fa-cog"></i> ajoutez un outil</button>

            <!-- modal tool form -->
            <div class="modal fade" id="addtool">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                      <span>&times;</span>
                    </button>
                    <h4 class="modal-title">ajout de l'outil</h4>
                  </div>
                  <div class="modal-body">
                    <form class="col" action="{{route('storeTool')}}" method="post">
                      @csrf
                      <div class="form-group">
                        <label for="name" class="form-control-label">Nom de l'outil</label>
                        <input type="text" class="form-control" name="name" id="nom" placeholder="nom de l'outil">
                      </div>
                      <div class="form-group">
                        <label for="url" class="form-control-label">url</label>
                        <input type="text" class="form-control" name="url" id="url" placeholder="https://url">
                      </div>
                      <div class="form-group">
                        <label for="description" class="form-control-label">description</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="3"></textarea>
                        <!-- <input type="text" class="form-control" name="url" id="url" placeholder="https://url"> -->
                      </div>
                      <div class="form-group">
                        <select class="form-control" name="category" id="">

                          @foreach($categories as $category )
                          <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach

                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <em></em>
                  </div>
                </div>
              </div>
            </div>
            <!-- modal tool form -->

            <!-- modal edit tool form -->
            <div class="modal fade" id="edittool">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                      <span>&times;</span>
                    </button>
                    <h4 class="modal-title">ajout de l'outil</h4>
                  </div>
                  <div class="modal-body">


                    <form class="col" id="editTool" action="{{route('editTool')}}" method="post">
                      @method('PATCH')
                      @csrf
                      <div class="form-group">
                        <label for="toolID" class="form-control-label">ID de l'outil</label>
                        <input type="text" class="form-control" name="toolID" id="editToolID" readonly>
                      </div>
                      <div class="form-group">
                        <label for="name" class="form-control-label">Nom de l'outil</label>
                        <input type="text" class="form-control" name="name" id="editToolName" placeholder="nom de l'outil">
                      </div>
                      <div class="form-group">
                        <label for="url" class="form-control-label">url</label>
                        <input type="text" class="form-control" name="url" id="editToolUrl" placeholder="https://url">
                      </div>
                      <div class="form-group">
                        <label for="description" class="form-control-label">description</label>
                        <textarea name="description" class="form-control" id="editToolDescription" cols="30" rows="3"></textarea>
                        <!-- <input type="text" class="form-control" name="url" id="url" placeholder="https://url"> -->
                      </div>
                      <div class="form-group">
                        <select class="form-control" name="category" id="editToolCategory">

                          @foreach($categories as $category )
                          <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach

                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <em></em>
                  </div>
                </div>
              </div>
            </div>
            <!-- / modal edit tool form -->
            <h4><i class="fa fa-angle-right"></i>outils</h4>

          </div>

          <div class="panel-body text-center">
            <table class="table table-striped table-advance table-hover" id="toolTable">
              <thead>
                <tr>
                  <th><i class="fa fa-bullhorn"></i> ID</th>
                  <th><i class="fa fa-bullhorn"></i> nom</th>
                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>description</th>
                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>categorie</th>

                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> url</th>

                  <th>actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($tools as $tool)
                <tr>
                  <td class="hidden-phone toolID">{{$tool->id}}</td>
                  <td><a href="{{$tool->url}}" class="toolName">{{$tool->name}}</a> </td>
                  <td class="hidden-phone toolDescription">{{$tool->description}}</td>
                  <td class="hidden-phone toolCategory">{{$tool->categories->name}}</td>
                  <td class="hidden-phone toolUrl">{{$tool->url}}</td>

                  <td>

                    <button data-toggle="modal" data-target="#edittool" class="btn btn-primary editToolBtn btn-xs"><i class="fa fa-pencil"></i></button>

                    <button type="submit" class="btn btn-danger btn-xs"> <a class="delete-tool" href="/sappaDev/sappa/public/administration/deleteTool/{{$tool->id}}"><i class="fa fa-trash-o "></i></a> </button>

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


  </div>



  <!--  second ligne -->
  <div class="row mt">
    <!-- department -->
    <div class="col-lg-6">
      <div class="content-panel">
        <div>

          <button data-toggle="modal" data-target="#adddepartment" class="btn btn-theme" type="button" style="float:right;"><i class="fa fa-cog"></i> ajoutez un departement</button>

          <!-- modal department form -->
          <div class="modal fade" id="adddepartment">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                  </button>
                  <h4 class="modal-title">ajout de l'outil</h4>
                </div>
                <div class="modal-body">
                  <form class="col" action="{{route('storeDepartment')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="departmentName" class="form-control-label">Nom du departement</label>
                      <input type="text" class="form-control" name="departmentName" id="departmentName" placeholder="Nom du departement">
                    </div>
                    <div class="form-group">
                      <label for="departmentCode" class="form-control-label">Code du departement</label>
                      <input type="text" class="form-control" name="departmentCode" id="departmentCode" placeholder="Code du departement">
                    </div>
                    <div class="form-group">
                      <label for="codeCenter" class="form-control-label">Code du centre</label>
                      <input type="text" class="form-control" name="codeCenter" id="codeCenter" value="257">
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <em></em>
                </div>
              </div>
            </div>
          </div>
          <!-- // modal departement form -->

          <!-- modal edit department form -->
          <div class="modal fade" id="editdepartment">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                  </button>
                  <h4 class="modal-title">ajout de l'outil</h4>
                </div>
                <div class="modal-body">
                  <form class="col" action="{{route('editDepartment')}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                      <label for="editDepartmentID" class="form-control-label">ID du departement</label>
                      <input type="text" class="form-control" name="editDepartmentID" id="editDepartmentID" readonly>
                    </div>
                    <div class="form-group">
                      <label for="editDepartmentName" class="form-control-label">Nom du departement</label>
                      <input type="text" class="form-control" name="editDepartmentName" id="editDepartmentName">
                    </div>
                    <div class="form-group">
                      <label for="editDepartmentCode" class="form-control-label">Code du departement</label>
                      <input type="text" class="form-control" name="editDepartmentCode" id="editDepartmentCode">
                    </div>
                    <div class="form-group">
                      <label for="editDepartmentCodeCenter" class="form-control-label">Code du centre</label>
                      <input type="text" class="form-control" name="editDepartmentCodeCenter" id="editDepartmentCodeCenter" value="257">
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <em></em>
                </div>
              </div>
            </div>
          </div>
          <!-- // modal edit departement form -->
          <h4><i class="fa fa-angle-right"></i>Departements</h4>

        </div>

        <div class="panel-body text-center">
          <table class="table table-striped table-advance table-hover" id="departmentTable">
            <thead>
              <tr>
                <th><i class="fa fa-bullhorn"></i>ID</th>
                <th><i class="fa fa-bullhorn"></i> nom</th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i>code</th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i>code centre</th>
                <th>actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($departments as $department)
              <tr>
                <td class="departmentID">{{$department->id}}</td>
                <td class="departmentName">{{$department->department_name}}</td>
                <td class="hidden-phone departmentCode">{{$department->department_code}}</td>
                <td class="hidden-phone codeCenter">{{$department->centre_code}}</td>


                <td>

                  <button data-toggle="modal" data-target="#editdepartment" class="btn btn-primary editDepartmentBtn btn-xs"><i class="fa fa-pencil"></i></button>

                  <button type="submit" class="btn btn-danger btn-xs"> <a class="delete-tool" href="/sappaDev/sappa/public/administration/deleteDepartment/{{$department->id}}"><i class="fa fa-trash-o "></i></a> </button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- / department -->
    <!-- category -->
    <div class="col-lg-6">
      <div class="content-panel">
        <div>

          <button data-toggle="modal" data-target="#addcategory" class="btn btn-theme" type="button" style="float:right;"><i class="fa fa-cog"></i> ajoutez une categorie</button>

          <!-- modal category form -->
          <div class="modal fade" id="addcategory">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                  </button>
                  <h4 class="modal-title">ajout d'une categorie</h4>
                </div>
                <div class="modal-body">
                  <form class="col" action="{{route('storeCategory')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="category-name" class="form-control-label">Nom de la categorie</label>
                      <input type="text" class="form-control" name="category-name" id="category-name" placeholder="nom de la categorie">
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <em></em>
                </div>
              </div>
            </div>
          </div>
          <!-- // modal  category form -->

          <!-- modal edit category form -->
          <div class="modal fade" id="editCategory">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                  </button>
                  <h4 class="modal-title">ajout d'une categorie</h4>
                </div>
                <div class="modal-body">
                  <form class="col" action="{{route('editCategory')}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                      <label for="editCategoryID" class="form-control-label">ID de la categorie</label>
                      <input type="text" class="form-control" name="editCategoryID" id="editCategoryID" readonly>
                    </div>
                    <div class="form-group">
                      <label for="editCategoryName" class="form-control-label">Nom de la categorie</label>
                      <input type="text" class="form-control" name="editCategoryName" id="editCategoryName">
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <em></em>
                </div>
              </div>
            </div>
          </div>
          <!-- // modal edit  category form -->
          <h4><i class="fa fa-angle-right"></i>Categories d'outils</h4>

        </div>

        <div class="panel-body text-center">
          <table class="table table-striped table-advance table-hover" id="categoryTable">
            <thead>
              <tr>
                <th><i class="fa fa-bullhorn "></i> ID</th>
                <th><i class="fa fa-bullhorn "></i> nom</th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i> crée le </th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i> mis a jours le </th>
                <th>actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
              <tr>
                <td class="categoryID">{{$category->id}} </td>
                <td class="categoryName">{{$category->name}} </td>
                <td class="hidden-phone">{{$category->created_at}}</td>
                <td class="hidden-phone">{{$category->updated_at}}</td>


                <td>

                  <button data-toggle="modal" data-target="#editCategory" class="btn btn-primary editCategoryBtn btn-xs"><i class="fa fa-pencil"></i></button>

                  <button type="submit" class="btn btn-danger btn-xs"> <a class="delete-category" href="/sappaDev/sappa/public/administration/deleteCategory/{{$category->id}}"><i class="fa fa-trash-o "></i></a> </button>
                </td>
              </tr>
              @endforeach
          </table>
        </div>
      </div>
    </div>
    <!-- / category -->
  </div>
  <!-- second ligne -->


  <!--  third ligne -->
  <div class="row mt">
    <!-- department -->
    <div class="col-lg-12">
      <div class="content-panel">
        <div>

          <button data-toggle="modal" data-target="#addbo" class="btn btn-theme" type="button" style="float:right;"><i class="fa fa-cog"></i> ajoutez une BO</button>

          <!-- modal bo form -->
          <div class="modal fade" id="addbo">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                  </button>
                  <h4 class="modal-title">ajout de base opérationnelle</h4>
                </div>
                <div class="modal-body">
                  <form class="col" action="{{route('storeBo')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="bo-name" class="form-control-label">Nom de la BO</label>
                      <input type="text" class="form-control" name="bo-name" id="bo-name" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="bo-code" class="form-control-label">Code BO</label>
                      <input type="text" class="form-control" name="bo-code" id="bo-code" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="ae-name" class="form-control-label">Nom de l'ae</label>
                      <input type="text" class="form-control" name="ae-name" id="ae-name" placeholder="il peut être le meme que le nom de la bo">
                    </div>
                    <div class="form-group">
                      <label for="ae-code" class="form-control-label">Code ae</label>
                      <input type="text" class="form-control" name="ae-code" id="ae-code" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="color-code" class="form-control-label">Code Couleur</label>
                      <input type="color" class="form-control" name="color-code" id="color-code" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="zex" class="form-control-label">ZEX</label>
                      <input type="text" class="form-control" name="zex" id="zex" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="bo-email" class="form-control-label">Email</label>
                      <input type="text" class="form-control" name="bo-email" id="bo-email" placeholder="user@exemple.com">
                    </div>

                    <div class="form-group">
                      <select class="form-control" name="department" id="department-id">

                        @foreach($departments as $department)
                        <option value="{{$department->id}}">{{$department->department_name}}</option>
                        @endforeach

                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <em></em>
                </div>
              </div>
            </div>
          </div>
          <!-- // modal  bo form -->

          <!-- modal edit bo form -->
          <div class="modal fade" id="editbo">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                  </button>
                  <h4 class="modal-title">ajout de base opérationnelle</h4>
                </div>
                <div class="modal-body">
                  <form class="col" action="{{route('editBo')}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                      <label for="editBoID" class="form-control-label">ID de la BO</label>
                      <input type="text" class="form-control" name="editBoID" id="editBoID" readonly>
                    </div>
                    <div class="form-group">
                      <label for="editBoName" class="form-control-label">Nom de la BO</label>
                      <input type="text" class="form-control" name="editBoName" id="editBoName">
                    </div>
                    <div class="form-group">
                      <label for="editBoCode" class="form-control-label">Code BO</label>
                      <input type="text" class="form-control" name="editBoCode" id="editBoCode">
                    </div>
                    <div class="form-group">
                      <label for="editBoAeName" class="form-control-label">Nom de l'ae</label>
                      <input type="text" class="form-control" name="editBoAeName" id="editBoAeName">
                    </div>
                    <div class="form-group">
                      <label for="editBoAeCode" class="form-control-label">Code ae</label>
                      <input type="text" class="form-control" name="editBoAeCode" id="editBoAeCode">
                    </div>
                    <div class="form-group">
                      <label for="editBoColorCode" class="form-control-label">Code Couleur</label>
                      <input type="color" class="form-control" name="editBoColorCode" id="editBoColorCode">
                    </div>
                    <div class="form-group">
                      <label for="editBoZex" class="form-control-label">ZEX</label>
                      <input type="text" class="form-control" name="editBoZex" id="editBoZex">
                    </div>
                    <div class="form-group">
                      <label for="editBoEmail" class="form-control-label">Email</label>
                      <input type="text" class="form-control" name="editBoEmail" id="editBoEmail">
                    </div>

                    <div class="form-group">
                      <select class="form-control" name="editBoDepartment" id="editBoDepartment">

                        @foreach($departments as $department)
                        <option value="{{$department->id}}">{{$department->department_name}}</option>
                        @endforeach

                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <em></em>
                </div>
              </div>
            </div>
          </div>
          <!-- // modal edit bo form -->
          <h4><i class="fa fa-angle-right"></i>BO</h4>

        </div>

        <div class="panel-body text-center">
          <table class="table table-striped table-advance table-hover" id="boTable">
            <thead>
              <tr>
                <th><i class="fa fa-bullhorn"></i> ID</th>
                <th><i class="fa fa-bullhorn"></i> nom ae</th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i>code ae</th>
                <th><i class="fa fa-bullhorn"></i> nom bo</th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i>code bo</th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i>couleur</th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i>zex</th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i>email</th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i>departement</th>
                <th>actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($bos as $bo)
              <tr>
                <td class="BoID">{{$bo->id}} </td>
                <td class="BoAeName">{{$bo->ae_name}} </td>
                <td class="hidden-phone BoAeCode">{{$bo->ae_code}}</td>
                <td class="hidden-phone BoName">{{$bo->bo_name}}</td>
                <td class="hidden-phone BoCode">{{$bo->bo_code}}</td>


                <td class="hidden-phone BoColorCode"> <input type="color" name="" id="" value="{{$bo->color}}"></td>
                <td class="hidden-phone BoZex">{{$bo->zex}}</td>
                <td class="hidden-phone BoEmail">{{$bo->email}}</td>
                <td class="hidden-phone BoDepartment">{{$bo->department->department_name}}</td>


                <td>

                  <button data-toggle="modal" data-target="#editbo" class="btn btn-primary editBoBtn btn-xs"><i class="fa fa-pencil"></i></button>
                  <button type="submit" class="btn btn-danger btn-xs"> <a class="delete-category" href="/sappaDev/sappa/public/administration/deleteBo/{{$bo->id}}"><i class="fa fa-trash-o "></i></a> </button>

                </td>
              </tr>
              @endforeach
          </table>
        </div>
      </div>
    </div>
    <!-- / bo -->
  </div>


  <!-- // third ligne -->

  <!--  fourth ligne -->
  <div class="row mt">
    <!-- postes -->
    <div class="col-lg-12">
      <div class="content-panel">
        <div>

          <button data-toggle="modal" data-target="#addposte" class="btn btn-theme" type="button" style="float:right;"><i class="fa fa-cog"></i> ajoutez un poste</button>

          <!-- modal poste form -->
          <div class="modal fade" id="addposte">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                  </button>
                  <h4 class="modal-title">ajout de poste</h4>
                </div>
                <div class="modal-body">
                  <form class="col" action="{{route('storePoste')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="poste-name" class="form-control-label">Nom du poste</label>
                      <input type="text" class="form-control" name="poste-name" id="poste-name" placeholder="Nom du poste">
                    </div>
                    <div class="form-group">
                      <label for="codeGDO" class="form-control-label">Code Gdo</label>
                      <input type="text" class="form-control" name="codeGDO" id="codeGDO" placeholder="Code Gdo du poste">
                    </div>
                    <div class="form-group">
                      <label for="poste-name-gari" class="form-control-label">Nom Gari</label>
                      <input type="text" class="form-control" name="poste-name-gari" id="poste-name-gari" placeholder="le nom gari du poste">
                    </div>
                    <div class="form-group">
                      <label for="poste-schema" class="form-control-label">schema normal</label>
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Selectionner le schéma</span>
                          <span class="fileupload-exists"><i class="fa fa-undo"></i> Changer le schéma</span>
                          <input type="file" class="default" name="poste-schema" id="poste-schema" />
                        </span>
                        <span class="fileupload-preview" style="margin-left:5px;"></span>
                        <a href="advanced_form_components.html#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                      </div>
                    </div>
                    <div class="form-group">
                      <select class="form-control" name="bo-id" id="bo-id">

                        @foreach($bos as $bo)
                        <option value="{{$bo->id}}">{{$bo->bo_name}}</option>
                        @endforeach

                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <em></em>
                </div>
              </div>
            </div>
          </div>
          <!-- // modal  poste form -->

          <!-- modal edit poste form -->
          <div class="modal fade" id="editposte">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                  </button>
                  <h4 class="modal-title">modifier le poste</h4>
                </div>
                <div class="modal-body">
                  <form class="col" action="{{route('storePoste')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="editPosteID" class="form-control-label">ID</label>
                      <input type="text" class="form-control" name="editPosteID" id="editPosteID" readonly>
                    </div>
                    <div class="form-group">
                      <label for="editPosteName" class="form-control-label">Nom du poste</label>
                      <input type="text" class="form-control" name="editPosteName" id="editPosteName">
                    </div>
                    <div class="form-group">
                      <label for="editCodeGDO" class="form-control-label">Code Gdo</label>
                      <input type="text" class="form-control" name="editCodeGDO" id="editCodeGDO">
                    </div>
                    <div class="form-group">
                      <label for="editPosteNameGari" class="form-control-label">Nom Gari</label>
                      <input type="text" class="form-control" name="editPosteNameGari" id="editPosteNameGari">
                    </div>
                    <div class="form-group">
                      <label for="editPosteSchema" class="form-control-label">schema normal</label>
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Selectionner le schéma</span>
                          <span class="fileupload-exists"><i class="fa fa-undo"></i> Changer le schéma</span>
                          <input type="file" class="default" name="editPosteSchema" id="editPosteSchema" />
                        </span>
                        <span class="fileupload-preview" style="margin-left:5px;"></span>
                        <a href="advanced_form_components.html#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                      </div>
                    </div>
                    <div class="form-group">
                      <select class="form-control" name="editBoId" id="editBoId">

                        @foreach($bos as $bo)
                        <option value="{{$bo->id}}">{{$bo->bo_name}}</option>
                        @endforeach

                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <em></em>
                </div>
              </div>
            </div>
          </div>
          <!-- // modal edit poste form -->
          <h4><i class="fa fa-angle-right"></i>Postes</h4>

        </div>

        <div class="panel-body text-center">
          <table class="table table-striped table-advance table-hover" id="posteTable">
            <thead>
              <tr>
                <th><i class="fa fa-bullhorn"></i> ID</th>
                <th><i class="fa fa-bullhorn"></i> Nom</th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i>Code GDO </th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i>Nom Gari </th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i>Bo </th>
                <th><i class="fa fa-bullhorn"></i> Schema normal</th>


                <th>actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($postes as $poste)
              <tr>
                <td class="posteID">{{$poste->id}} </td>
                <td class="posteName">{{$poste->name}} </td>
                <td class="hidden-phone posteGdoCode">{{$poste->code_gdo}}</td>
                <td class="hidden-phone posteGariName">{{$poste->name_gari}}</td>
                <td class="hidden-phone posteBo">{{$poste->bo->bo_name}}</td>
                <td class="hidden-phone BoCode"> <a href="../storage/app/{{$poste->schema}}">lien</a> </td>



                <td>

                  <button data-toggle="modal" data-target="#editposte" class="btn btn-primary editPosteBtn btn-xs"><i class="fa fa-pencil"></i></button>
                  <button type="submit" class="btn btn-danger btn-xs"> <a class="delete-category" href="/sappaDev/sappa/public/administration/deletePoste/{{$poste->id}}"><i class="fa fa-trash-o "></i></a> </button>

                </td>
              </tr>
              @endforeach
          </table>
        </div>
      </div>
    </div>
    <!-- / poste -->
  </div>


  <!-- // fourth  ligne -->


  <!--  fifth ligne -->
  <div class="row mt">
    <!-- postes -->
    <div class="col-lg-12">
      <div class="content-panel">
        <div>

          <button data-toggle="modal" data-target="#addDepart" class="btn btn-theme" type="button" style="float:right;"><i class="fa fa-cog"></i> ajoutez un depart</button>

          <!-- modal depart form -->
          <div class="modal fade" id="addDepart">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                  </button>
                  <h4 class="modal-title">ajout de depart</h4>
                </div>
                <div class="modal-body">
                  <form class="col" action="{{route('storeDepart')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="depart-name" class="form-control-label">Nom du depart</label>
                      <input type="text" class="form-control" name="depart-name" id="depart-name" placeholder="Nom du depart">
                    </div>
                    <div class="form-group">
                      <label for="sitr-name" class="form-control-label">Nom SITR</label>
                      <input type="text" class="form-control" name="sitr-name" id="sitr-name" placeholder="Code Gdo du depart">
                    </div>
                    <div class="form-group">
                      <label for="depart-name-gari" class="form-control-label">Nom Gari</label>
                      <input type="text" class="form-control" name="depart-name-gari" id="depart-name-gari" placeholder="le nom gari du depart">
                    </div>
                    <div class="form-group">
                      <label for="codeSIG" class="form-control-label">Code SIG</label>
                      <input type="text" class="form-control" name="codeSIG" id="codeSIG" placeholder="le code SIG du depart">
                    </div>
                    <div class="form-group">
                      <label for="depart-schema" class="form-control-label">schema normal</label>
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Selectionner le schéma</span>
                          <span class="fileupload-exists"><i class="fa fa-undo"></i> Changer le schéma</span>
                          <input type="file" class="default" name="depart-schema" id="depart-schema" />
                        </span>
                        <span class="fileupload-preview" style="margin-left:5px;"></span>
                        <a href="advanced_form_components.html#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="depart-voltage" class="form-control-label">Voltage</label>
                      <input type="text" class="form-control" name="depart-voltage" id="depart-voltage" placeholder="voltage">
                    </div>
                    <div class="form-group">
                      <label for="comment" class="form-control-label">commentaire</label>
                      <textarea name="comment" class="form-control" id="comment" cols="30" rows="3"></textarea>

                    </div>
                    <div class="form-group">
                      <select class="form-control" name="poste-id" id="poste-id">

                        @foreach($postes as $poste)
                        <option value="{{$poste->id}}">{{$poste->name}}</option>
                        @endforeach

                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <em></em>
                </div>
              </div>
            </div>
          </div>
          <!-- // modal  depart form -->

          <!-- modal edit depart form -->
          <div class="modal fade" id="editdepart">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                  </button>
                  <h4 class="modal-title">modifier le depart</h4>
                </div>
                <div class="modal-body">
                  <form class="col" action="{{route('editDepart')}}" method="post" enctype="multipart/form-data">
                  @method('PATCH')
                    @csrf
                    <div class="form-group">
                      <label for="editDepartID" class="form-control-label">ID</label>
                      <input type="text" class="form-control" name="editDepartID" id="editDepartID" readonly>
                    </div>
                    <div class="form-group">
                      <label for="editDepartName" class="form-control-label">Nom du depart</label>
                      <input type="text" class="form-control" name="editDepartName" id="editDepartName">
                    </div>
                    <div class="form-group">
                      <label for="editDepartSITR" class="form-control-label">Nom SITR</label>
                      <input type="text" class="form-control" name="editDepartSITR" id="editDepartSITR">
                    </div>
                    <div class="form-group">
                      <label for="editDepartNameGari" class="form-control-label">Nom Gari</label>
                      <input type="text" class="form-control" name="editDepartNameGari" id="editDepartNameGari">
                    </div>
                    <div class="form-group">
                      <label for="editDepartCodeSIG" class="form-control-label">Code SIG</label>
                      <input type="text" class="form-control" name="editDepartCodeSIG" id="editDepartCodeSIG">
                    </div>
                    <div class="form-group">
                      <label for="editDepartSchema" class="form-control-label">schema normal</label>
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Selectionner le schéma</span>
                          <span class="fileupload-exists"><i class="fa fa-undo"></i> Changer le schéma</span>
                          <input type="file" class="default" name="editDepartSchema" id="editDepartSchema" />
                        </span>
                        <span class="fileupload-preview" style="margin-left:5px;"></span>
                        <a href="advanced_form_components.html#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="editDepartVoltage" class="form-control-label">Voltage</label>
                      <input type="text" class="form-control" name="editDepartVoltage" id="editDepartVoltage">
                    </div>
                    <div class="form-group">
                      <label for="editDepartComment" class="form-control-label">commentaire</label>
                      <textarea name="editDepartComment" class="form-control" id="editDepartComment" cols="30" rows="3"></textarea>

                    </div>
                    <div class="form-group">
                      <select class="form-control" name="editPosteDepartId" id="editPosteDepartId">

                        @foreach($postes as $poste)
                        <option value="{{$poste->id}}">{{$poste->name}}</option>
                        @endforeach

                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <em></em>
                </div>
              </div>
            </div>
          </div>
          <!-- // modal edit depart form -->
          <h4><i class="fa fa-angle-right"></i>Departs</h4>

        </div>

        <div class="panel-body text-center">
          <table class="table table-striped table-advance table-hover" id="departTable">
            <thead>
              <tr>
                <th><i class="fa fa-bullhorn"></i> ID</th>
                <th><i class="fa fa-bullhorn"></i> Nom</th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i>Nom SITR </th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i>Nom Gari </th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i>Code SIG </th>
                <th class="hidden-phone"><i class="fa fa-question-circle"></i>Poste </th>
                <th><i class="fa fa-bullhorn"></i> Schema </th>
                <th><i class="fa fa-bullhorn"></i> Voltage</th>
                <th><i class="fa fa-bullhorn"></i> Commentaire</th>


                <th>actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($departs as $depart)
              <tr>
                <td class="departID">{{$depart->id}} </td>
                <td class="departName">{{$depart->name}} </td>
                <td class="hidden-phone departSITR">{{$depart->name_sitr}}</td>
                <td class="hidden-phone departGariName">{{$depart->name_gari}}</td>
                <td class="hidden-phone departSIG">{{$depart->code_sig}}</td>
                <td class="hidden-phone departPoste">{{$depart->poste->name}}</td>
                <td class="hidden-phone "> <a href="../storage/app/{{$depart->schema}}">lien</a> </td>
                <td class="hidden-phone departVoltage">{{$depart->voltage}}</td>
                <td class="hidden-phone departComment">{{$depart->comment}}</td>

                <td>

                  <button data-toggle="modal" data-target="#editdepart" class="btn btn-primary editDepartBtn btn-xs"><i class="fa fa-pencil"></i></button>
                  <button type="submit" class="btn btn-danger btn-xs"> <a class="delete-category" href="/sappaDev/sappa/public/administration/deleteDepart/{{$depart->id}}"><i class="fa fa-trash-o "></i></a> </button>

                </td>
              </tr>
              @endforeach
          </table>
        </div>
      </div>
    </div>
    <!-- / poste -->
  </div>


  <!-- // fifth  ligne -->
  <!-- page end-->
</section>





@endsection

@section('scripts')

<script>
  let boTable = $('#boTable');
  let posteTable = $('#posteTable');
  let categoryTable = $('#categoryTable');
  let toolTable = $('#toolTable');
  let departmentTable = $('#departmentTable');
  let departTable = $('#departTable');

  departTable.on('click', '.editDepartBtn', function() {
    var tr = $(this).closest('tr');
    $('#editDepartID').val(tr.children('.departID').text());
    $('#editDepartName').val(tr.children('.departName').text());
    $('#editDepartSITR').val(tr.children('.departSITR').text());
    $('#editDepartNameGari').val(tr.children('.departGariName').text());
    $('#editDepartCodeSIG').val(tr.children('.departSIG').text());
    $('#editDepartVoltage').val(tr.children('.departVoltage').text());
    $('#editDepartComment').val(tr.children('.departComment').text());
// console.log(tr.children('.departGariName').text());
// console.log($('#editDepartNameGari'));
    $('#editPosteDepartId option').each(function() {

      if ($(this).text() === tr.children('.departPoste').text()) {
        $(this).prop('selected', true);
      }
    })
  })


  posteTable.on('click', '.editPosteBtn', function() {
    var tr = $(this).closest('tr');
    $('#editPosteID').val(tr.children('.posteID').text());
    $('#editPosteName').val(tr.children('.posteName').text());
    $('#editCodeGDO').val(tr.children('.posteGdoCode').text());
    $('#editPosteNameGari').val(tr.children('.posteGariName').text());

    $('#editBoId option').each(function() {

      if ($(this).text() === tr.children('.posteBo').text()) {
        $(this).prop('selected', true);
      }
    })
  })


  boTable.on('click', '.editBoBtn', function() {

    var tr = $(this).closest('tr');

    $('#editBoID').val(tr.children('.BoID').text());
    $('#editBoName').val(tr.children('.BoName').text());
    $('#editBoCode').val(tr.children('.BoCode').text());
    $('#editBoAeName').val(tr.children('.BoAeName').text());
    $('#editBoAeCode').val(tr.children('.BoAeCode').text());
    $('#editBoColorCode').val(tr.children('.BoColorCode').children('input').val());
    $('#editBoZex').val(tr.children('.BoZex').text());
    $('#editBoEmail').val(tr.children('.BoEmail').text());
    $('#editBoDepartment option').each(function() {

      if ($(this).text() === tr.children('.BoDepartment').text()) {
        $(this).prop('selected', true);
      }
    })


  })

  departmentTable.on('click', '.editDepartmentBtn', function() {
    var tr = $(this).closest('tr');

    $('#editDepartmentID').val(tr.children('.departmentID').text());
    $('#editDepartmentName').val(tr.children('.departmentName').text());
    $('#editDepartmentCode').val(tr.children('.departmentCode').text());
    $('#editDepartmentCodeCenter').val(tr.children('.codeCenter').text());


  });

  toolTable.on('click', '.editToolBtn', function() {

    var tr = $(this).closest('tr');


    $('#editToolID').val(tr.children('.toolID').text());
    $('#editToolName').val(tr.children('td').children('.toolName').text());
    $('#editToolUrl').val(tr.children('.toolUrl').text());
    $('#editToolDescription').val(tr.children('.toolDescription').text());
    $('#editToolCategory option').each(function() {
      console.log($(this).text())
      if ($(this).text() === tr.children('.toolCategory').text()) {

        $(this).prop('selected', true)
      }
    });


  });

  categoryTable.on('click', '.editCategoryBtn', function() {

    var tr = $(this).closest('tr');

    $('#editCategoryID').val(tr.children('.categoryID').text());
    $('#editCategoryName').val(tr.children('.categoryName').text());

  });



  $('.delete-tool').on('click', function(event) {
    event.preventDefault();
    const url = $(this).attr('href');
    Swal.fire({
      title: 'êtes vous sûr ?',
      text: " de vouloir supprimer cet element!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'annuler',
      confirmButtonText: 'confirmer'
    }).then((result) => {
      if (result.value) {

        window.location.href = url;
        Swal.fire(
          'element supprimé!',
          'avec success',
          'success'
        )
      }
    });
  });

  $('.delete-category').on('click', function(event) {
    event.preventDefault();
    const url = $(this).attr('href');
    Swal.fire({
      title: 'êtes vous sûr ?',
      text: " de vouloir supprimer cet element!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'annuler',
      confirmButtonText: 'confirmer'
    }).then((result) => {
      if (result.value) {

        window.location.href = url;
        Swal.fire(
          'element supprimé!',
          'avec success',
          'success'
        )
      }
    });
  });


  $('.delete-user').on('click', function(event) {
    event.preventDefault();
    const url = $(this).attr('href');
    Swal.fire({
      title: 'êtes vous sûr ?',
      text: " de vouloir supprimer cet element!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'annuler',
      confirmButtonText: 'confirmer'
    }).then((result) => {
      if (result.value) {

        window.location.href = url;
        Swal.fire(
          'element supprimé!',
          'avec success',
          'success'
        )
      }
    });
  });
</script>

@stop
<a href="{{route('taches.create')}}">create</a>
<br><br>
<table class="table-hover table table-bordered text-center ">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>nomt</th>
            <th>descript</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    @foreach ($taches as $tache)
    <tr>
        <td>{{$tache->id}}</td>
        <td>{{$tache->nomt}}</td>
        <td>{{$tache->description}}</td>
        <td colspan="2">
            <button title="Modifer"><a href="{{route('taches.edit',$tache->id)}}">edit</a></button>
            <button title="Supprimer" ><a href="{{url('taches-user/'.$tache->id)}}">delete</a></button>
            <button title="Détail" ><a href="{{route('taches.show',$tache->id)}}">show</a></button>
        </td>
       
    </tr>
    @endforeach
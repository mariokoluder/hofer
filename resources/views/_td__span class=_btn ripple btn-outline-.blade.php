<td><span class="btn ripple btn-outline-dark disabled">{{ $post->section->title }}</span></td>
<td>{{ $post->publish_up }}</td>
<td>
  <a href="{{ url('novosti/'.$post->slug) }}" target="_blank" class="btn ripple btn-outline-primary btn-sm"><i class="fe fe-eye"></i> Pregled</a>
  <a href="{{ action([App\Http\Controllers\Dash\PostController::class, 'edit'], ['post' => $post]) }}" class="btn ripple btn-outline-warning btn-sm" ><i class="fe fe-edit"></i> Uredi</a>
  <button class="btn ripple btn-outline-danger btn-sm" data-bs-target="#modaldemo{{ $post->id }}" data-bs-toggle="modal"><i class="fe fe-trash"></i> Izbriši</button>
  <div class="modal fade" id="modaldemo{{ $post->id }}">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-content-demo">
        <div class="modal-body">
          <p>Jeste li sigurni da želite izbrisati članak <strong>{{ $post->title }}</strong>?</p>
        </div>
        <div class="modal-footer">
          <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline-block;">@method('DELETE') @csrf <button type="submit" class="btn ripple btn-outline-danger"><i class="fe fe-trash"></i> DA</button>
          <button type="reset" class="btn ripple" data-bs-dismiss="modal">NE</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</td>
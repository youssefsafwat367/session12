<div>
    <form action="{{ $action }}" method="POST">
        @method('delete')
        @csrf
        <input type="submit" class="btn btn-danger" value="Delete">
    </form>
</div>

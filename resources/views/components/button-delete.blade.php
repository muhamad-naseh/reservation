<a href="#" onclick="deleteData({{ $id }})" class="text-sm font-medium text-pink-700 hover:underline">
    hapus
</a>

<form id="delete-form-{{ $id }}" action="{{ $url }}" method="POST" style="display:none;">
    @csrf
    @method('DELETE')
</form>


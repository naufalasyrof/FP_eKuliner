<div class="d-flex">
    <a href="{{ route('profile.show',['profile' => $pesanan->users_id])}}" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-eye"></i></a>
    </div>
</div>
{{-- <div class="d-flex">
    <form action="{{ route('profile.show',['pesanan' => $pesanans->users_id])}}">
    @csrf
    <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-eye"></i></button>
    </form>
        <form action="{{ route (profile.destroy,['pesanan' => $pesanans->users_id])}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
        </form>
    </div>
</div> --}}

<form action="{{ route('basket-add', $tour) }}" method="POST">

    <button type="submit">В корзину</button>

    @csrf
</form>

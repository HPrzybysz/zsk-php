<h3>Dodawanie produktu</h3>


<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->

    <div class="input_field">
    <form action="{{ route('product.store') }}" method="POST">
        <label for="name">Nazwa produkty</label><br>
        <input type="text" name = "name"><br>
        @error('name')
        <div>{{ $message }}</div>
        @enderror
    @csrf
    </div>

    <div class="input_field">
            <label for="price">Cena produktu</label><br>
            <input type="number" name = "price"><br>
            @error('price')
            <div>{{ $message }}</div>
            @enderror
        @csrf
    </div>

    <div class="input_field">
        <label for="description">Opis produktu</label><br>
        <input type="description" name = "description"><br>
        @error('description')
        <div>{{ $message }}</div>
        @enderror
    @csrf
    </div>

    <button type = 'submit'>Add product</button>
    
    </form>
</div>

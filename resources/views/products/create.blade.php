<form action="{{ route('products.store') }}" method="post">
    @csrf
    <label for="name">Product Name:</label>
    <input type="text" name="name" required>

    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" required>

    <label for="price">Price:</label>
    <input type="text" name="price" required>

    <button type="submit">Add Product</button>
</form>

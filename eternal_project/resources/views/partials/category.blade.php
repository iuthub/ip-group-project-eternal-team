
<div>

    <div class="list-group list-group-flush">
        <form method="get" action="{{route('display.category')}}">
            <label for="category">Category</label>
            <select id="category" name="category">
                <option value="services">Clothing</option>
                <option value="sports">Sports</option>
                <option value="electronics">Electronics</option>
                <option value="others">Others</option>
                <option value="animals">Animals</option>
                <option value="books">Books</option>
                <option value="cars">Cars</option>
                <option value="services">Services</option>
            </select>
            <button type="submit" class="btn btn-success">Search</button>
        </form>
    </div>
</div>
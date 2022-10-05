@php $editing = isset($book) @endphp

<div class="box-body">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ old('title', ($editing ? $book->Title : '')) }}" class="form-control" id="title"   maxlength="255" placeholder="Title" required/>
    </div>

    <div class="form-group">
        <label for="ISBN">ISBN</label>
        <input type="text" name="ISBN" value="{{ old('ISBN', ($editing ? $book->ISBN : '')) }}" class="form-control" id="ISBN"   maxlength="16" placeholder="Name" required/>
    </div>

    <div class="form-group">
        <label for="edition">Edition</label>
        <input type="text" name="edition" value="{{ old('edition', ($editing ? $book->edition : '')) }}" class="form-control" id="edition"   maxlength="255" placeholder="Edition" required/>
    </div>

    <div class="form-group">
        <label for="format">Format</label>
        <input type="text" name="format" value="{{ old('format', ($editing ? $book->format : '')) }}" class="form-control" id="format"   maxlength="255" placeholder="Format" required/>
    </div>

    <div class="form-group">
        <label for="Author">Author</label>
        <input type="text" name="Author" value="{{ old('Author', ($editing ? $book->Author : '')) }}" class="form-control" id="Author"   maxlength="255" placeholder="Author" required/>
    </div>

    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" step="1" value="{{ old('quantity', ($editing ? $book->quantity : '')) }}" class="form-control" id="quantity"   maxlength="255" placeholder="Quantity" required/>
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" name="price" step="0.01" value="{{ old('price', ($editing ? $book->price : '')) }}" class="form-control" id="price"   maxlength="255" placeholder="Price" required/>
    </div>

    <div class="form-group">
        <label for="sale_price">Sale Price</label>
        <input type="number" name="sale_price" step="0.01" value="{{ old('sale_price', ($editing ? $book->sale_price : '')) }}" class="form-control" id="sale_price"   maxlength="255" placeholder="Sale Price" required/>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea  name="description" value="{{ old('description', ($editing ? $book->description : '')) }}" class="form-control" id="description"  placeholder="Description" required></textarea>
    </div>

    <div class="form-group">
        <label for="featured">
            <input type="checkbox" name="featured" :checked="old('featured', ($editing ? $book->featured : 0))" id="featured"/>
            Featured
        </label>
    </div>
    <div class="form-group">
        <label for="on_sale">
            <input type="checkbox" name="on_sale" :checked="old('on_sale', ($editing ? $book->on_sale : 0))" id="on_sale"/>
            On Sale
        </label>
    </div>

</div>

    {{-- <x-inputs.group class="col-sm-12">    


    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="level_id" label="Level" required>
            @php $selected = old('level_id', ($editing ? $book->level_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Level</option>
            @foreach($levels as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="publisher_id" label="Publisher" required>
            @php $selected = old('publisher_id', ($editing ? $book->publisher_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Publisher</option>
            @foreach($publishers as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <div
            x-data="imageViewer('{{ $editing && $book->cover_image ? \Storage::url($book->cover_image) : '' }}')"
        >
            <x-inputs.partials.label
                name="cover_image"
                label="Cover Image"
            ></x-inputs.partials.label
            ><br />

            <!-- Show the image -->
            <template x-if="imageUrl">
                <img
                    :src="imageUrl"
                    class="object-cover rounded border border-gray-200"
                    style="width: 100px; height: 100px;"
                />
            </template>

            <!-- Show the gray box when image is not available -->
            <template x-if="!imageUrl">
                <div
                    class="border rounded border-gray-200 bg-gray-100"
                    style="width: 100px; height: 100px;"
                ></div>
            </template>

            <div class="mt-2">
                <input
                    type="file"
                    name="cover_image"
                    id="cover_image"
                    @change="fileChosen"
                />
            </div>

            @error('cover_image') @include('components.inputs.partials.error')
            @enderror
        </div>
    </x-inputs.group>

    @if($editing)
    <div class="form-group col-sm-12 mt-4">
        <h4>Assign @lang('crud.tags.name')</h4>

        @foreach ($tags as $tag)
        <div>
            <x-inputs.checkbox
                id="tag{{ $tag->id }}"
                name="tags[]"
                label="{{ ucfirst($tag->name) }}"
                value="{{ $tag->id }}"
                :checked="isset($book) ? $book->tags()->where('id', $tag->id)->exists() : false"
                :add-hidden-value="false"
            ></x-inputs.checkbox>
        </div>
        @endforeach
    </div>
    @endif
</div> --}}

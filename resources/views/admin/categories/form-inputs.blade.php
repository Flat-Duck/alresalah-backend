@php $editing = isset($category) @endphp

<div class="box-body">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('Name', ($editing ? $category->Name : '')) }}" class="form-control" id="name"   maxlength="255" placeholder="Name" required/>
    </div>
</div>
    

@php $editing = isset($publisher) @endphp
<div class="box-body">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('Name', ($editing ? $publisher->Name : '')) }}" class="form-control" id="name"   maxlength="255" placeholder="Name" required/>            
    </div>
</div>
    

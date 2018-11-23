@csrf
<div class="row">
    <div class="form-group col-6">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{old('title', $project->title)}}" class="form-control">
    </div>
    <div class="form-group col-6">
        <label for="url">Url</label>
        <input type="text" id="url" name="url" value="{{old('url', $project->url)}}"class="form-control">
    </div>
</div>
<div class="row">
    <div class="form-group col">
        <label for="description">Description</label>
        <input type="text" id="description" name="description" value="{{old('description', $project->description)}}"class="form-control">
    </div>
</div>
<div class="row">
    <div class="form-group col">
        <label for="technology">Technology</label>
        <textarea id="technology" name="technology" class="form-control">{{old('technology', $project->technology)}}</textarea>
    </div>
</div>

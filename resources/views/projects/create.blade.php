<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Create a Project</h1>

        <form method="POST" action="/projects">
            @csrf 
            
            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input ;type="text" class="input" name="title" placeholder="Project Title">
                </div>
            </div>

            <div class="field">
                <label class="label" for="description">Description</label>

                <div class="control">
                    <textarea name="description" class="textarea"></textarea>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button">Create Project</button>
                </div>
            </div>
        </form>
    </body>
</html>
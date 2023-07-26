<!DOCTYPE html>
<html>
<head>
    <title>Add Event</title>
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <h1>Add Event</h1>
        <form method="post" action="../model/save_event_m.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" rows="4"placeholder= "Say something about this Event"required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" accept="image/*" placeholder="Only aloow" required>
            </div>
            <div class="form-group">
                <label for="location">Event Location Name:</label>
                <input type="text" name="location_name" id="location_name" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea name="addresses" id="addresses" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="event_date">Event Date:</label>
                <input type="date" name="event_date" id="event_date" required>
            </div>
            <div class="form-group">
                <label for="event_time">Event Time:</label>
                <input type="time" name="event_time" id="event_time" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" required>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            <div class="form-group">
                <!-- <input type="submit" value="Save Event" class="btn"> -->
                <button type="submit" class="btn btn-success mb-3" name="save_event">Save</button>
                <button class="btn btn-danger mb-3" name="cancle" ><a href="dashboard_v.php" style="text-decoration: none; color:white;">Cancle</a> </button>

            </div>
        </form>
    </div>
</body>
</html>

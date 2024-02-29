<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.airtable.com/v0/appFL50D4aFOelacF/tblM5uT4tIm6Y9FZU/listRecords',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "fields": [
        "fldg512V0sAhDuO2Y",
        "fldYIHkb9VTHmUfEK",
        "fldBnkZQR2tc2OSRe",
        "fldWazbqTnIHie85X",
        "fldzcYVJoVrurF3Ci",
        "fldeFSnZR89jrxHd2",
        "fldX1LFm2JHtzTbJy",
        "fld8sFXpDw83thLXf",
        "fldAYTFVC6kS9CpJg",
        "fldCABNmcQ1C52hJc"
    ]
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer pat42XUmn6RD11bGU.62b12001f0eacaa006e1870c9bae6aeb881da7072634217e954e8ecc4989aa20',
    'Content-Type: application/json',
    'Cookie: brw=brwsULyvcvofVg4aO; AWSALB=bebBSkZjO/Cezk9RcjfPETShNYV7BXgtBf+iVJ9ekXGgVzYMV1gIdY+PwqaXidVpeuYTH9/R7pltoGh+oBP1JBbwIRNpHv16snAmXrb1sYznqizi/Y9dFaBaWD58; AWSALBCORS=bebBSkZjO/Cezk9RcjfPETShNYV7BXgtBf+iVJ9ekXGgVzYMV1gIdY+PwqaXidVpeuYTH9/R7pltoGh+oBP1JBbwIRNpHv16snAmXrb1sYznqizi/Y9dFaBaWD58'
  ),
  CURLOPT_SSL_VERIFYPEER => false, // Move this line here
));

$response = curl_exec($curl);
$error = curl_error($curl); // Check for cURL errors
$info = curl_getinfo($curl);

curl_close($curl);

    $resources = json_decode($response,true);
    $records = $resources['records'];
    // echo json_encode($records);
    function get_icon($type){
        switch ($type) {
            case 'pdf':
                return 'https://natakallam.com/app/uploads/2023/11/pdf-icon.png'; // Replace with your actual PDF icon image path
            case 'doc':
            case 'docx':
                return 'https://natakallam.com/app/uploads/2023/11/doc-icon.png'; // Replace with your actual Word document icon image path
            case 'jpg':
            case 'jpeg':
            case 'png':
                return 'https://natakallam.com/app/uploads/2023/11/image-icon.png'; // Replace with your actual image icon image path
            case 'mp4':
            case 'mov':
                return 'https://natakallam.com/app/uploads/2023/11/video-icon.png'; // Replace with your actual video icon image path
            case 'mp3':
                return 'https://natakallam.com/app/uploads/2023/11/audio-icon.png'; // Replace with your actual audio icon image path
            default:
                return 'https://natakallam.com/app/uploads/2023/11/default-icon.png'; // Replace with a default icon image path
        }
      } 
    $js_data_obj = 'const galleryData = [';
    
    foreach ($records as $res){
      $link = "";
      if(isset($res['fields']['Link'])){
        $link = '<a class="link_elmnt" href="'.$res['fields']['Link'].'" target="_blank"> <i class="fa fa-external-link" aria-hidden="true"></i>  Resource link</a>';
      }
      if(isset($res['fields']['Link 2'])){
        $link .= '<a class="link_elmnt" href="'.$res['fields']['Link 2'].'" target="_blank"> <i class="fa fa-external-link" aria-hidden="true"></i>  Resource link 2</a>';
      }
      $dialect = '';
      if(isset($res['fields']['Dialect'])){
        // $dialect = '<strong>Dialect:</strong> '.$res['fields']['Dialect'];
      }
      $attachement = '';
      if(isset($res['fields']['Attachments'])){
        $atts = $res['fields']['Attachments'];
        foreach($atts as $att){
          $url = $att['url'];
          $att_name = $att['filename'];
          $size = $att['size'];
          $type = explode(".",$att['filename']);
          if(isset($type[1])){
            $icon = get_icon($type[1]);
          }
          else{
            $icon = get_icon("");
          }
          $attachement .= '<a class="resource-file" data-url="'.$url.'" href="'.$url.'" target="_blank"><img width="20" src="'.$icon.'">'.$att_name.'</a>';
        }
      }
      $types = '';
      $types_arr = [];
      if(isset($res['fields']['Document type:'])){
        foreach($res['fields']['Document type:'] as $type){
          array_push($types_arr, $type);
          $types .= '<div class="doc-type '.$type.'">'.$type.'</div>';
        }
      }
      if(isset($res['fields']['cover image'])){
        $cover_img = $res['fields']['cover image'];
      }
      else{
        $cover_img = 'https://natakallam.com/app/uploads/2023/11/resources-default-image.png';  
      }
      if(isset($res['fields']['Notes'])){
        $notes = str_replace("\n","",$res['fields']['Notes']);
      }
      else{
        $notes = '';  
      }
      
      if (isset($res['fields']['Date of approval'])) {
        
        $value = str_replace("\n","",$res['fields']['Date of approval']);
    } else {
      
        $value = '';
    }
    
    
      $js_data_obj .= '{ name: "'.$res['fields']["Document's Name"].'", 
        notes:"'.$notes.'", 
        language:"'.$res['fields']['Language'].'",
        level: "'.$res['fields']['Level:'].'",
        dialect: "'.$dialect.'",
        link: "",
        date: "'.$value.'",
        type:"'.str_replace('"','\'',json_encode($types_arr)).'",
        type_html:"'.str_replace('"','\'',$types).'", 
        files: "'.str_replace('"','\'', $attachement).'",
        image:"'.$cover_img.'"},';
    }

    $js_data_obj .= '];';
   ?>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<link href="./teest.css" rel="stylesheet" />
























    <script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.min.js"
     integrity="sha512-frFP3ZxLshB4CErXkPVEXnd5ingvYYtYhE5qllGdZmcOlRKNEPbufyupfdSTNmoF5ICaQNO6SenXzOZvoGkiIA==" 
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .filters {
    display: none; /* Hide the filter initially */
}
</style>


    <div class="gallery">
    <div class="main_filter">
    <button id="toggleFilters">Toggle Filters</button>
        <div class="filters">
            <div class="filter">
            <label>Langauge:</label>
            <select id="filter1" class="styled-select" multiple>
                <option value="Arabic - Modern Standard Arabic">Arabic - Modern Standard Arabic</option>
                <option value="Arabic - Levantine">Arabic - Levantine</option>
                <option value="Arabic - Iraqi">Arabic - Iraqi </option>
                <option value="Arabic - Egyptian">Arabic - Egyptian </option>
                <option value="Arabic - Yemeni">Arabic - Yemeni</option>
                <option value="Arabic - Lebanese">Arabic - Lebanese</option>
                <option value="Spanish">Spanish</option>
                <option value="Persian">Persian</option>
                <option value="French">French</option>
                <option value="English">English</option>
                <option value="Ukrainian">Ukrainian</option>
                <option value="Learning tools for any language">Learning tools for any language</option>
            </select>
            </div>
            <div class="filter">
            <label>Level:</label>
            <select id="filter2" class="styled-select" multiple>
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Advanced">Advanced</option>
            </select>
            </div>
            <div class="filter">
            <label>File type:</label>
            <select id="filter3" class="styled-select" multiple>
                <option value="Article">Article</option>
                <option value="Video">Video</option>
                <option value="Song">Song</option>
                <option value="Book">Book</option>
                <option value="Script">Script</option>
                <option value="Audio">Audio</option>
                <option value="Exercise">Exercise</option>
                <option value="Vocabs">Vocabs</option>
                <option value="Other">Other</option>
            </select>
            </div>
        </div>
        <div class="search_sort">
            <div class="filter">
            <label>Search by name:</label>
            <div class="search">
                <input type="text" id="search" placeholder="Search...">
            </div>
            </div>
            <div class="filter">
            <label>Sort by:</label>
            <select id="sort" class="styled-select">
                <option value="default">Default</option>
                <option value="name">Name</option>
                <option value="date">Uploaded Date</option>
            </select>
            </div>
        </div>
        </div>
        <div class="items" id="galleryItems">
            <!-- Gallery items will be inserted here -->
        </div>
        <div class="pagination">
            <ul id="paginationControls" class="pagination-list">
                <!-- Pagination controls will be inserted here -->
            </ul>
        </div>
    </div>













    <script>jQuery(document).ready(function($) {
    // Sample gallery data
     <?php echo $js_data_obj; ?>


    const itemsPerPage = 9; // Number of items per page
    let currentPage = 1; // Current page
    let filteredItems = [...galleryData]; // Initial list of items

    // Function to render the gallery items
    // function renderGalleryItems(items) {
    //     const $galleryItems = $("#galleryItems");
    //     $galleryItems.empty(); // Clear existing items
    //     items.slice((currentPage - 1) * itemsPerPage, currentPage * itemsPerPage).forEach(item => {
    //         const $item = $("<div class='item'></div>")
    //             .data("language", item.language)
    //             .data("level", item.level)
    //             .data("date", new Date(item.date).getTime())
    //             .html("<img class=\'cover-image\' src=\'"+item.image+"\'><h3>"+item.name+"</h3>"+item.type_html+"<p>"+markdownToHtml(item.notes)+"</p>"+item.files+"<div class=\'language_elmnt\'>"+item.link+"<br>"+item.language+" • "+item.level+"</div>");
    //         $galleryItems.append($item);
    //     });
    // }

    // Function to render gallery items on the web page
function renderGalleryItems(items) {
    // Select the container element with the ID "galleryItems" using jQuery
    const $galleryItems = $("#galleryItems");
    
    // Clear any existing items in the container
    $galleryItems.empty();

    // Calculate the range of items to display based on the current page and items per page
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = currentPage * itemsPerPage;
    
    // Iterate over the subset of items to display
    items.slice(startIndex, endIndex).forEach(item => {
        // Create a new HTML element for each item using jQuery
        const $item = $("<div class='item'></div>")
            // Set data attributes for additional metadata
            .data({
                "language": item.language,
                "level": item.level,
                "date": new Date(item.date).getTime()
            })
            // Set the HTML content for the item
            .html(`
                <img class='cover-image' src='${item.image}'>
                <h3>${item.name}</h3>
                ${item.type_html}
                <p>${markdownToHtml(item.notes)}</p>
                ${item.files}
                <div class='language_elmnt'>
                    ${item.link}<br>${item.language} • ${item.level}
                </div>
            `);

        // Append the created item to the container
        $galleryItems.append($item);
    });
}


    // Initialize pagination
    function initPagination(totalItems) {
        var total_pages = Math.ceil(totalItems / itemsPerPage);
        $("#paginationControls").twbsPagination({
            totalPages: (total_pages==0)?1:total_pages,
            visiblePages: 5, // Adjust as needed
            next: ">",
            prev: "<",
            first: "<<",
            last: ">>",
            onPageClick: function (event, page) {
                currentPage = page;
                renderGalleryItems(filteredItems);
            }
        });
    }
    // Initial rendering
    renderGalleryItems(filteredItems);
    initPagination(filteredItems.length);
    $("#filter2").select2({placeholder     : "Level",}).trigger("change");
    $("#filter1").select2({placeholder     : "Language",}).trigger("change");
    $("#filter3").select2({placeholder     : "File type",}).trigger("change");
    // Event listeners for filter, search, and sort
    $("#filter1, #filter2, #filter3, #search, #sort").on("change input", function () {
    	console.log($("#filter2").val());
        const filter1Value = $("#filter1").val();
        const filter2Value = $("#filter2").val();
        const filter3Value = $("#filter3").val();
        const searchTerm = $("#search").val().toLowerCase();
        const sortBy = $("#sort").val();

        // Apply filters
        filteredItems = galleryData.filter(item => {
            const itemTypeArr = JSON.parse(item.type);
            const langaugeMatch = (filter1Value.length === 0 || filter1Value.includes(item.language));
            const levelMatch = (filter2Value.length === 0 || filter2Value.includes(item.level));
            const typeMatch = (filter3Value.length === 0 || itemTypeArr.some(itemm => filter3Value.includes(itemm)));
            const searchMatch = item.name.toLowerCase().includes(searchTerm);

            return langaugeMatch && levelMatch && typeMatch && searchMatch;
        });

        // Apply sorting
        if (sortBy === "name") {
            filteredItems.sort((a, b) => a.name.localeCompare(b.name));
        } else if (sortBy === "date") {
            filteredItems.sort((a, b) => new Date(a.date).getTime() - new Date(b.date).getTime());
        }
        // Update pagination and re-render items
        $("#paginationControls").twbsPagination("destroy");
        initPagination(filteredItems.length);
        renderGalleryItems(filteredItems);
    });
    
});
function markdownToHtml(text) {
    // Headings (# H1, ## H2, ### H3, etc.)
    text = text.replace(/^#{1,6}\s?(.+)/gm, function(match, group1) {
        let level = match.split(' ')[0].length;
        return `<h${level}>${group1}</h${level}>`;
    });

    // Bold (**text**)
    text = text.replace(/\*\*(.*?)\*\*/g, "<b>$1</b>");

    // Italics (_text_)
    text = text.replace(/_(.*?)_/g, "<i>$1</i>");

    // Ordered Lists
    text = text.replace(/^\d+\.\s+(.+)$/gm,'<li>$1</li>').replace(/(<li>.*<\/li>)/g, '<ol>$1</ol>');

    // Unordered Lists
    text = text.replace(/^\*\s+(.+)$/gm,'<li>$1</li>').replace(/(<li>.*<\/li>)/g, '<ul>$1</ul>');

    // Blockquotes (>)
    text = text.replace(/^>\s?(.+)/gm, "<blockquote>$1</blockquote>");

    // Inline Code (`code`)
    text = text.replace(/`(.+?)`/g, "<code>$1</code>");

    // Code Blocks (```)
    text = text.replace(/```([\s\S]*?)```/g, "<pre><code>$1</code></pre>");

    // Links ([text](link))
    text = text.replace(/\[([^\]]+)\]\(([^)]+)\)/g, "<a href=\'$2\'>$1</a>");

    // Horizontal Rule (---)
    text = text.replace(/^---$/gm, "<hr>");
    text = text.replace(/\n/g, "<br>");

    return text;
}

    // JavaScript to toggle the visibility of the filter container
    document.getElementById('toggleFilters').addEventListener('click', function() {
        var filterContainer = document.querySelector('.filters');
        filterContainer.style.display = (filterContainer.style.display === 'none' || filterContainer.style.display === '') ? 'block' : 'none';
    });

</script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"/>
<link href="filecss.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="parsemd.js"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.min.js"
integrity="sha512-frFP3ZxLshB4CErXkPVEXnd5ingvYYtYhE5qllGdZmcOlRKNEPbufyupfdSTNmoF5ICaQNO6SenXzOZvoGkiIA==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- driver -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- <script src="file.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/showdown/2.1.0/showdown.min.js" integrity="sha512-LhccdVNGe2QMEfI3x4DVV3ckMRe36TfydKss6mJpdHjNFiV07dFpS2xzeZedptKZrwxfICJpez09iNioiSZ3hA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://cdn.jsdelivr.net/npm/markdown-it@14.1.0/dist/markdown-it.min.js"></script>
<div class="gallery">
 
    <div class="main_filter">
        
        <div class="input-group">
            <input type="search" id="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        </div>
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Filter
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                    <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"/>
                    </svg>
                </button>
                <button class="btn" type="button" id="clear_filters">Clear filters X</button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="custom-dropdown dropend">
                        <button class="dropdown-item dropdown-toggle" type="button" id="dropdownMenuLink1"
                            data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <span class="custom-dropdown-item">Language</span>
                            <span class="badge">&gt;</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink1" id="MenuLink1">
                            <li>
                                <input type="checkbox" id="msaCheckbox" name="language"
                                    value="Arabic - Modern Standard Arabic">
                                <label for="msaCheckbox">Arabic - Modern Standard Arabic</label>
                            </li>

                            <li>
                                <input type="checkbox" id="levantineCheckbox" name="language" value="Arabic - Levantine">
                                <label for="levantineCheckbox">Arabic - Levantine</label>
                            </li>

                            <li>
                                <input type="checkbox" id="iraqiCheckbox" name="language" value="Arabic - Iraqi">
                                <label for="iraqiCheckbox">Arabic - Iraqi</label>
                            </li>

                            <li>
                                <input type="checkbox" id="egyptianCheckbox" name="language" value="Arabic - Egyptian">
                                <label for="egyptianCheckbox">Arabic - Egyptian</label>
                            </li>

                            <li>
                                <input type="checkbox" id="yemeniCheckbox" name="language" value="Arabic - Yemeni">
                                <label for="yemeniCheckbox">Arabic - Yemeni</label>
                            </li>

                            <li>
                                <input type="checkbox" id="lebaneseCheckbox" name="language" value="Arabic - Lebanese">
                                <label for="lebaneseCheckbox">Arabic - Lebanese</label>
                            </li>

                            <li>
                                <input type="checkbox" id="spanishCheckbox" name="language" value="Spanish">
                                <label for="spanishCheckbox">Spanish</label>
                            </li>

                            <li>
                                <input type="checkbox" id="persianCheckbox" name="language" value="Persian">
                                <label for="persianCheckbox">Persian</label>
                            </li>

                            <li>
                                <input type="checkbox" id="frenchCheckbox" name="language" value="French">
                                <label for="frenchCheckbox">French</label>
                            </li>

                            <li>
                                <input type="checkbox" id="englishCheckbox" name="language" value="English">
                                <label for="englishCheckbox">English</label>
                            </li>

                            <li>
                                <input type="checkbox" id="ukrainianCheckbox" name="language" value="Ukrainian">
                                <label for="ukrainianCheckbox">Ukrainian</label>
                            </li>

                            <li>
                                <input type="checkbox" id="learningToolsCheckbox" name="language"
                                    value="Learning tools for any language">
                                <label for="learningToolsCheckbox">Learning tools for any language</label>
                            </li>
                        </ul>
                    </div>
                    <div class="custom-dropdown dropend">
                        <button class="dropdown-item dropdown-toggle" type="button" id="dropdownMenuLink2"
                            data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <span class="custom-dropdown-item">Level</span>
                            <span class="badge">&gt;</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink2" id="MenuLink2">
                            <li>
                                <input type="checkbox" name="level" value="Beginner"> 
                                <label for="Begginer">Begginer</label>
                            </li>
                            <li>
                                <input type="checkbox" name="level" value="Intermediate"> 
                                <label for="Intermediate">Intermediate</label>
                            </li>
                            <li>
                                <input type="checkbox" name="level" value="Advanced"> 
                                <label for="Advanced">Advanced</label>
                            </li>

                        </ul>
                    </div>
                    <div class="custom-dropdown dropend">
                        <button class="dropdown-item dropdown-toggle" type="button" id="dropdownMenuLink3"
                            data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <span class="custom-dropdown-item">Type</span>
                            <span class="badge">&gt;</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink3" id="MenuLink3">
                            <li>
                                <input type="checkbox" id="articleCheckbox" name="type" value="Article">
                                <label for="articleCheckbox">Article</label>
                            </li>

                            <li>
                                <input type="checkbox" id="videoCheckbox" name="type" value="Video">
                                <label for="videoCheckbox">Video</label>
                            </li>

                            <li>
                                <input type="checkbox" id="songCheckbox" name="type" value="Song">
                                <label for="songCheckbox">Song</label>
                            </li>

                            <li>
                                <input type="checkbox" id="bookCheckbox" name="type" value="Book">
                                <label for="bookCheckbox">Book</label>
                            </li>

                            <li>
                                <input type="checkbox" id="scriptCheckbox" name="type" value="Script">
                                <label for="scriptCheckbox">Script</label>
                            </li>

                            <li>
                                <input type="checkbox" id="audioCheckbox" name="type" value="Audio">
                                <label for="audioCheckbox">Audio</label>
                            </li>

                            <li>
                                <input type="checkbox" id="exerciseCheckbox" name="type" value="Exercise">
                                <label for="exerciseCheckbox">Exercise</label>
                            </li>

                            <li>
                                <input type="checkbox" id="vocabsCheckbox" name="type" value="Vocabs">
                                <label for="vocabsCheckbox">Vocabs</label>
                            </li>

                            <li>
                                <input type="checkbox" id="otherCheckbox" name="type" value="Other">
                                <label for="otherCheckbox">Other</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        
            <div class="search_sort">
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
    <div id="selected_filters">
        <span id="selected_languages"></span>
        <span id="selected_levels"></span>
        <span id="selected_types"></span>
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



<?php
	function fetchAllRecordsFromAirtable($apiUrl, $authorizationHeader) {
	    $allRecords = array();

	    do {
	        $curl = curl_init();

	        curl_setopt_array($curl, array(
	            CURLOPT_URL => $apiUrl,
	            CURLOPT_RETURNTRANSFER => true,
	            CURLOPT_ENCODING => '',
	            CURLOPT_MAXREDIRS => 10,
	            CURLOPT_TIMEOUT => 0,
	            CURLOPT_FOLLOWLOCATION => true,
	            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	            CURLOPT_CUSTOMREQUEST => 'POST',
	            CURLOPT_POSTFIELDS => '{
	                "offset": "' . (isset($offset) ? $offset : '') . '"
	            }',
	            CURLOPT_HTTPHEADER => array(
	                'Authorization: ' . $authorizationHeader,
	                'Content-Type: application/json'
	            ),
	            CURLOPT_SSL_VERIFYPEER => false
	        ));

	        $response = curl_exec($curl);
	        $error = curl_error($curl); 
	        $info = curl_getinfo($curl);

	        curl_close($curl);

	        if ($response === false) {
	            return false;
	        }

	        $responseData = json_decode($response, true);

	        if (isset($responseData['records'])) {
	         
	            foreach ($responseData['records'] as $record) {
	                $allRecords[] = $record;
	            }
	        }

	        $offset = isset($responseData['offset']) ? $responseData['offset'] : null;
	       
	        

	    } while ($offset !== null);
	    

	    return $allRecords;
	}
	$apiUrl = 'https://api.airtable.com/v0/appFL50D4aFOelacF/tblM5uT4tIm6Y9FZU/listRecords';
	$authorizationHeader = 'Bearer XXXXXXXXXXXXXXXXXXX'; // XXXXXXXXXXXXXXXXXXX replace by your airtable API token 
    $records = fetchAllRecordsFromAirtable($apiUrl,$authorizationHeader);

    function get_icon($type){
        switch ($type) {
            case 'pdf':
                return 'https://natakallam.com/app/uploads/2023/11/pdf-icon.png'; 
            case 'doc':
            case 'docx':
                return 'https://natakallam.com/app/uploads/2023/11/doc-icon.png'; 
            case 'jpg':
            case 'jpeg':
            case 'png':
                return 'https://natakallam.com/app/uploads/2023/11/image-icon.png'; 
            case 'mp4':
            case 'mov':
                return 'https://natakallam.com/app/uploads/2023/11/video-icon.png'; 
            case 'mp3':
                return 'https://natakallam.com/app/uploads/2023/11/audio-icon.png'; 
            default:
                return 'https://natakallam.com/app/uploads/2023/11/default-icon.png'; 
        }
      } 
    $js_data_obj = 'const galleryData = [';
    
    foreach ($records as $res){
      $link = "";
      if(isset($res['fields']['Link'])){
        $link = '<a class=\'link_elmnt\' href=\''.$res['fields']['Link'].'\' target=\'_blank\'> <i class=\'fa fa-external-link\' aria-hidden=\'true\'></i>  Resource link</a>';
      }
      if(isset($res['fields']['Link 2'])){
        $link .= '<a class=\'link_elmnt\' href=\''.$res['fields']['Link 2'].'\' target=\'_blank\'> <i class=\'fa fa-external-link\' aria-hidden=\'true\'></i>  Resource link 2</a>';
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
          $attachement .= '<a class=\'resource-file\' data-url=\''.$url.'\' href=\''.$url.'\' target=\'_blank\'><img width=\'20\' src=\''.$icon.'\'>'.$att_name.'</a>';
        }
      }
      $types = '';
      $types_arr = [];
      if(isset($res['fields']['Document type:'])){
        foreach($res['fields']['Document type:'] as $type){
          array_push($types_arr, $type);
          $types .= '<div class=\'doc-type '.$type.'\'>'.$type.'</div>';
        }
      }
      if(isset($res['fields']['cover image'])){
        $cover_img = $res['fields']['cover image'];
      }
      else{
        $cover_img = 'https://natakallam.com/app/uploads/2023/11/resources-default-image.png';  
      }
      if(isset($res['fields']['Notes'])){
        $notes = str_replace("\n","\=br\=",$res['fields']['Notes']);
        $notes = str_replace('"',"'",$notes);
      }
      else{
        $notes = '';  
      }
      
	if (isset($res['fields']['Date of approval'])) {
		$value = str_replace("\n","",$res['fields']['Date of approval']);
	} else {

		$value = '';
	}
	if (isset($res['fields']['Language'])) {
		$lang = $res['fields']['Language'];
	} else {

		$lang = '';
	}
	if (isset($res['fields']['Level:'])) {
		$level = $res['fields']['Level:'];
	} else {

		$level = '';
	}
    
    
    $js_data_obj .= '{ 
    	name: "'.$res['fields']["Document's Name"].'",
		notes:"'.$notes.'",
		language:"'.$lang.'",
		level: "'.$level.'",
		dialect: "'.$dialect.'",
		link: "'.$link.'",
		date: "'.$value.'",
		type:"'.str_replace('"','\"',json_encode($types_arr)).'",
		type_html:"'.$types.'",
		files: "'.$attachement.'", 
		image:"'.$cover_img.'"},';
    }

    $js_data_obj .= '];';
   ?>


 



<script>

    jQuery(document).ready(function($) {
    // Sample gallery data
     <?php echo $js_data_obj; ?>


    const itemsPerPage = 9; // Number of items per page
    let currentPage = 1; // Current page
    let filteredItems = [...galleryData]; // Initial list of items


    // Function to render gallery items on the web page
function renderGalleryItems(items) {
    // Select the container element with the ID "galleryItems" using jQuery
    const $galleryItems = $("#galleryItems");
    
    // Clear any existing items in the container
    $galleryItems.empty();

    // Calculate the range of items to display based on the current page and items per page
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = currentPage * itemsPerPage;
    var converter = new showdown.Converter();




    // Iterate over the subset of items to display
    items.slice(startIndex, endIndex).forEach(item => {
        var content = convertMarkdownToHTML(item.notes);
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
                <p>${content}</p>
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
    // $("#filter2").select2({placeholder     : "Level",}).trigger("change");
    // $("#filter1").select2({placeholder     : "Language",}).trigger("change");
    // $("#filter3").select2({placeholder     : "File type",}).trigger("change");
    // Event listeners for filter, search, clear and sort
    $("#clear_filters").on("click", function(){
        const searchTerm = $("#search").val().toLowerCase();
        const sortBy = $("#sort").val();
        // Apply filters
        filteredItems = galleryData.filter(item => {
            const langaugeMatch = true;
            const levelMatch = true;
            const typeMatch = true;
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
        $("#clear_filters").hide();
        $("#selected_types").html("");
        $("#selected_levels").html("");
        $("#selected_languages").html("");
    });
    $("input[name='language'], input[name='level'],input[name='type'], #search, #sort").on("change input", function () {
        const filter1Value = $("input[name='language']").val();
        const filter2Value = $("input[name='level']").val();
        const filter3Value = $("input[name='type']").val();
        const searchTerm = $("#search").val().toLowerCase();
        const sortBy = $("#sort").val();
        var languages_selected = [];
        var levels_selected = [];
        var types_selected = [];
        $("input[name='language']:checkbox:checked").each(function(i){
            languages_selected[i] = $(this).val();
        });
        $("input[name='level']:checkbox:checked").each(function(i){
            levels_selected[i] = $(this).val();
        });
        $("input[name='type']:checkbox:checked").each(function(i){
            types_selected[i] = $(this).val();
        });
        // console.log(filter1Value +" ,"+filter2Value+" ,"+filter3Value+" ,"+searchTerm+" ,"+sortBy)
        if(languages_selected.length === 0){
            $("#selected_languages").html("");
        }
        else{
            var text_langs = '';
            for(var x=0; x<languages_selected.length ;x++){
                text_langs+= '<div class="filter-selected languages_selected">'+languages_selected[x]+'</div>';
            }
            $("#selected_languages").html(text_langs);
        }
        if(levels_selected.length === 0){
            $("#selected_levels").html("");
        }
        else{
            var text_levels = '';
            for(var x=0; x<levels_selected.length ;x++){
                text_levels+= '<div class="filter-selected levels_selected">'+levels_selected[x]+'</div>';
            }
            $("#selected_levels").html(text_levels);
        }
        if(types_selected.length === 0){
            $("#selected_types").html("");
        }
        else{
            var text_types = '';
            for(var x=0; x<types_selected.length ;x++){
                text_types+= '<div class="filter-selected types_selected">'+types_selected[x]+'</div>';
            }
            $("#selected_types").html(text_types);
        }
        if(types_selected.length > 0 || levels_selected.length > 0 || languages_selected.length > 0){
            $("#clear_filters").show();
        }
        // Apply filters
        filteredItems = galleryData.filter(item => {
            const itemTypeArr = JSON.parse((item.type).replace(/'/g, '"'));
            const langaugeMatch = (languages_selected.length === 0 || languages_selected.includes(item.language));
            const levelMatch = (levels_selected.length === 0 || levels_selected.includes(item.level));
            const typeMatch = (types_selected.length === 0 || itemTypeArr.some(itemm => types_selected.includes(itemm)));
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
function convertMarkdownToHTML(markdown) {
    // Replace newlines with <br> tags
    let html = markdown.replace(/<([^>]+)>/g, '<a href="$1">$1</a>');
 
    // Convert links
    html = html.replace(/\=br\=/g, '<br>');

    // Convert bold text
    html = html.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');

   
    return html;
}


function toggleCheckboxList(buttonNumber) {
    for (let i = 1; i <= 3; i++) {
      const checkboxList = document.getElementById(`MenuLink${i}`);
      checkboxList.style.display = (i === buttonNumber && checkboxList.style.display === 'none') ? 'block' : 'none';
    }
  }
</script>


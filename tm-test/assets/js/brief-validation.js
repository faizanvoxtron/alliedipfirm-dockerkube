function regDetails(x) {
    console.log(x.value);
    let data = '';
    if(x.value == "Name") {
        $('.registration-type-data').addClass('active');
        data+= '<h5>Enter the name you wish to protect</h5>'+
        '<input type="text" required name="RegistrationTypeValue" placeholder="e.g. BMB Jewels" />';
        $('.registration-type-data').html(data);
    }
    if(x.value == "Slogan") {
        $('.registration-type-data').addClass('active');
        data+= '<h5>Enter the slogan you wish to protect</h5>'+
        '<input type="text" required name="RegistrationTypeValue" placeholder="e.g. Shine with your beauty" />';
        $('.registration-type-data').html(data);
    }
    if(x.value == "Logo") {
        $('.registration-type-data').addClass('active');
        data+= '<h5>Upload the logo you wish to protect</h5>'+
        '<div class="pictures-uploading">'+
            '<div class="upload-box">'+
                '<input onchange="uploadFile(this)" required name="RegistrationTypeValue" type="file" id="fileInput" />'+
            '</div>'+
        '</div>'+
        '<div id="fileList"></div><br><div class="progress"></div><div id="statusResponse"></div>'+
        '<textarea required name="LogoDescription" placeholder="e.g. The Logo represents an Intellectual Property Firm (Allied IP Firm) consist of a box outlined and filled with dark Blue color. The white symbol inside the blue box created by using small letter a, Capital letter I, and Capital letter P. The right text with the mark represents the name of the business/company."></textarea>';
        
        $('.registration-type-data').html(data);
        
        initUploader();
    }
    if(x.value == "Individual") {
        $('.register-for .row .org-data').remove();
        data += '<div class="col-md-12 name-data"><br><p style="color:black; margin-bottom:0">Fields marked with <span class="mandatory">*</span> are mandatory. Please provide Individual information in the form below.</p></div>'+
        '<div class="col-md-6 col-sm-12 name-data">'+
        '<h5>First Name <span class="mandatory">*</span></h5>'+
        '<input type="text" name="FirstName" placeholder="e.g. Richard" required />'+
        '</div>'+
        '<div class="col-md-6 col-sm-12 name-data">'+
            '<h5>Last Name <span class="mandatory">*</span></h5>'+
            '<input type="text" name="LastName" placeholder="e.g. Wentzel" required />'+
        '</div>';

        $('.register-for .row').prepend(data);
        $('.register-for').addClass('active');
    }
    if(x.value == "Organization") {
        $('.register-for .row .name-data').remove();
        data += '<div class="col-md-12 org-data"><br><p style="color:black; margin-bottom:0">Fields marked with <span class="mandatory">*</span> are mandatory. Please provide Business information in the form below.</p></div>'+
        '<div class="col-md-6 col-sm-12 org-data">'+
        '<h5>Organization Name <span class="mandatory">*</span></h5>'+
        '<input type="text" name="OrganizationName" placeholder="e.g. Allied IP Firm INC." required>'+
        '</div>'+
        '<div class="col-md-6 col-sm-12 org-data">'+
        '<h5>Organization Type <span class="mandatory">*</span></h5>'+
        '<select required name="OrganizationType">'+
        '<option value="">Select Organization Type</option>'+
        '<option value="LLC">LLC</option>'+
        '<option value="C-Corp">C Corporation</option>'+
        '<option value="S-Corp">S Corporation</option>'+
        '<option value="Non Profit">Non-Profit</option>'+
        '<option value="Partnership">Partnership</option>'+
        '<option value="Sole Proprietorship">Sole Proprietorship</option>'+
        '<option value="Trust">Trust</option>'+
        '</select>'+
        '</div>';
        
        $('.register-for .row').prepend(data);
        $('.register-for').addClass('active');
    }
}

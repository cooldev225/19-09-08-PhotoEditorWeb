var ImageManager = (function() {
    var instantiated;

    function init() {
        // singleton here
        var controls = {};
        var currentItem = null;
        var frontImages = [];
        var innerLeftImages = [];
        var innerRightImages = [];
        var backImages = [];
        var frontPageInitialized = false;
        var innerLeftPageInitialized = false;
        var innerRightPageInitialized = false;
        var backPageInitialized = false;

        temp = $("input[name$='json_session_image_front']").val();
        try{
            if (temp != "") frontImages = eval(temp);
        }catch(Error){
            frontImages=[];
        }

        temp = $("input[name$='json_session_image_cardinside_left']").val();
        try{
            if (temp != "") innerLeftImages = eval(temp);
        }catch(Error){
            innerLeftImages=[];
        }
        
        temp = $("input[name$='json_session_image_cardinside_right']").val();
        try{
            if (temp != "") innerRightImages = eval(temp);
        }catch(Error){
            innerRightImages = [];
        }
        
        temp = $("input[name$='json_session_image_back']").val();
        try{
            if (temp != "") backImages = eval(temp);
        }catch(Error){
            backImages = [];
        }
        
        
        function getCurrentPageImages() {//alert($("input[name$='current_activate_cardpage']").val());
            currentPage = parseInt($("input[name$='current_activate_cardpage']").val());

            var imageArray = null;
            switch (currentPage) {
                case 1:
                    imageArray = frontImages;
                    break;
                case 2:
                    imageArray = innerLeftImages;
                    break;
                case 3:
                    imageArray = innerRightImages;
                    break;
                case 4:
                    imageArray = backImages;
                    break;
            }
            
            return imageArray;
        }

        function setCurrentPageImages(imageArray) {
            currentPage = parseInt($("input[name$='current_activate_cardpage']").val());
            switch (currentPage) {
                case 1:
                    frontImages = imageArray;
                    break;
                case 2:
                    innerLeftImages = imageArray;
                    break;
                case 3:
                    innerRightImages = imageArray;
                    break;
                case 4:
                    backImages = imageArray;
                    break;
            }
        }

        function getCurrentPage() {
            return parseInt($("input[name$='current_activate_cardpage']").val());
        }

        function initializeCurrentPage() {

            //switch (getCurrentPage()) {
            //    case 1:
            //        if (frontPageInitialized) return;
            //        frontPageInitialized = true;
            //        break;
            //    case 2:
            //        if (innerLeftPageInitialized) return;
            //        innerLeftPageInitialized = true;
            //        break;
            //    case 3:
            //        if (innerRightPageInitialized) return;
            //        innerRightPageInitialized = true;
            //        break;
            //    case 4:
            //        if (backPageInitialized) return;
            //        backPageInitialized = true;
            //        break;
            //}

            var allImages = getCurrentPageImages();
            //if(allImages==null)return;
            for (var i = 0; i < allImages.length; i++) {
                controller = new ImageController($('#' + allImages[i].DragId));
                controls[allImages[i].DragId] = controller;
                //alert(allImages[i].DragId);
                controller.rotateTo(0, function (result, data) {
                    data.controller.removeEffects();
                    data.controller.applyActionHistory(data.actions);
                },
                { controller: controller, actions: allImages[i].ActionHistory });
            }
        }

        function reapplyActionListForGivenImage(imageID) {           
            var allImages = getCurrentPageImages();
            for (var i = 0; i < allImages.length; i++) {

                if (allImages[i].ImageId == imageID) {
                    //console.log("XCXC");
                    controls[allImages[i].DragId].applyActionHistory(allImages[i].ActionHistory);
                    
//                    controller = new ImageController($('#' + allImages[i].DragId));
//                    console.log('XXX - ' + JSON.stringify(allImages[i]));
//                    controls[allImages[i].DragId] = controller;
//                    controller.rotateTo(0, function(result, data) {
//                        data.controller.applyActionHistory(data.actions);
//                    },
//                    { controller: controller, actions: allImages[i].ActionHistory });
                }
            }
        }

        return {
            setSelectedItem: function(containerID) {
                if (controls.hasOwnProperty(containerID))
                    currentItem = controls[containerID];
                else {
                    currentItem = new ImageController($('#' + containerID));
                    controls[containerID] = currentItem;
                }
            },
            resetItem: function(containerID, imageUpdated) {
                if (controls.hasOwnProperty(containerID)) {
                    var controller = controls[containerID];
                    imageUpdated = typeof imageUpdated !== 'undefined' ? imageUpdated : false;
                    controller.reset(imageUpdated);
                }
            },
            getCurrentStatus: function(containerID) {
                if (controls.hasOwnProperty(containerID)) {
                    var controller = controls[containerID];
                    return controller.getCurrentState();
                }
                else return null;
            },
            getCapabilities: function() {
                var response = {};
                response.sepia = Pixastic.Actions.sepia.checkSupport();
                response.blackAndWhite = Pixastic.Actions.desaturate.checkSupport();
                response.flipHorizontal = Pixastic.Actions.hflip.checkSupport();
                response.flipVertical = Pixastic.Actions.vflip.checkSupport();
                response.rotate = Pixastic.Actions.rotate.checkSupport();
                response.brightnes = Pixastic.Actions.brightness.checkSupport();
                response.contrast = Pixastic.Actions.brightness.checkSupport();
                response.sharpen = Pixastic.Actions.sharpen.checkSupport();
                response.hue = Pixastic.Actions.hsl.checkSupport();
                response.saturation = Pixastic.Actions.hsl.checkSupport();
                return response;
            },
            getController: function() {
                return currentItem;
            },
            updateImage: function (imageID, dragId, imagePath, aWidth, aHeight, cWidth, cHeight, x, y, isNewUpload, isAdminUpload) {
                var imageArray = getCurrentPageImages();
                if (imageArray instanceof Array) {
                    var n = imagePath.lastIndexOf("/");
                    var temp_Src = "";
                    var temp_ImagePath = "";

                    if (n != -1) {
                        temp_Src = imagePath.substr(n + 1);
                        temp_ImagePath = imagePath.substring(0, n);
                    }
                    for (var i = 0; i < imageArray.length; i++) {//alert(imagePath);
                        if (imageArray[i].ImageId == imageID) {
                            if (isNewUpload) {
                                imageArray[i].ImagePath = temp_ImagePath + "/";
                                imageArray[i].Src = imagePath;//temp_Src;
                                imageArray[i].AW = aWidth;
                                imageArray[i].AH = aHeight;
                                imageArray[i].CW = cWidth;
                                imageArray[i].CH = cHeight;
                                imageArray[i].X = x;
                                imageArray[i].Y = y;
                                imageArray[i].IsUpload = true;
                                imageArray[i].IsResized = false;
                                imageArray[i].MessageLog = null;
                                imageArray[i].isAdminUpload = (isAdminUpload != undefined) ? isAdminUpload : false;
                            }
                            else {
                                imageArray[i].CW = cWidth;
                                imageArray[i].CH = cHeight;
                                imageArray[i].X = x;
                                imageArray[i].Y = y;
                                imageArray[i].IsResized = true;
                            }
                            break;
                        }
                    }
                }

                setCurrentPageImages(imageArray);
            },
            updateImageCurrentWidthAndHeight: function(imageID, dragId, cWidth, cHeight) {
                var imageArray = getCurrentPageImages();
                if (imageArray instanceof Array) {
                    for (var i = 0; i < imageArray.length; i++) {
                        if (imageArray[i].ImageId == imageID) {
                            imageArray[i].CW = cWidth;
                            imageArray[i].CH = cHeight;
                            imageArray[i].IsResized = true;
                            break;
                        }
                    }
                }
            },
            setImageForRotate: function(imageID) {
                var imageArray = getCurrentPageImages();
                if (imageArray instanceof Array) {
                    for (var i = 0; i < imageArray.length; i++) {
                        if (imageArray[i].ImageId == imageID) {                            
                            // Set new width & height for image to rotate
                            var nv = parseInt(Math.sqrt((parseInt(imageArray[i].DragWidth)*parseInt(imageArray[i].DragWidth)) + (parseInt(imageArray[i].DragHeight)*parseInt(imageArray[i].DragHeight))));
                            
                            if(parseInt(imageArray[i].DragWidth) >= parseInt(imageArray[i].DragHeight)) {
                                if(parseInt(imageArray[i].CH)<nv) {                                    
                                    imageArray[i].CW = parseInt(parseInt(imageArray[i].CW) * (nv/parseInt(imageArray[i].CH)));                                
                                    imageArray[i].CH = nv;
                                }
                            }
                            else {
                                if(parseInt(imageArray[i].CW)<nv) {                                    
                                    imageArray[i].CH = parseInt(parseInt(imageArray[i].CH) * (nv/parseInt(imageArray[i].CW)));
                                    imageArray[i].CW = nv;
                                }
                            }                            
                            
                            // Set new top & left for image to rotate                            
                            var drag_center_left = parseInt(parseInt(imageArray[i].DragWidth)/2);
                            var drag_center_top = parseInt(parseInt(imageArray[i].DragHeight)/2);
                            
                            var image_center_left = parseInt(parseInt(imageArray[i].CW)/2)
                            var image_center_top = parseInt(parseInt(imageArray[i].CH)/2)
                            
                            imageArray[i].X = imageArray[i].DragX - (image_center_left-drag_center_left);
                            imageArray[i].Y = imageArray[i].DragY - (image_center_top-drag_center_top);
                                     
                            $("#" + imageArray[i].ImageId).css("width", imageArray[i].CW);
                            $("#" + imageArray[i].ImageId).css("height", imageArray[i].CH);  
                            $("#" + imageArray[i].ImageId).css("top", imageArray[i].Y);
                            $("#" + imageArray[i].ImageId).css("left", imageArray[i].X);

                            break;
                        }
                    }
                }                
            },
            updateImageInfoField: function() {
                for (var i = 0; i < frontImages.length; i++) {
                    curState = this.getCurrentStatus(frontImages[i].DragId);
                    if (curState) {
                        frontImages[i].X = curState.x;
                        frontImages[i].Y = curState.y;
                        frontImages[i].Zoom = curState.zoomLevel;
                        frontImages[i].ActionHistory = curState.actionHistory;
                    }
                }
                //alert('!>!'+JSON.stringify(frontImages));
                $("input[name$='json_session_image_front']").val(JSON.stringify(frontImages));

                for (var i = 0; i < innerLeftImages.length; i++) {
                    curState = this.getCurrentStatus(innerLeftImages[i].DragId);
                    if (curState) {
                        innerLeftImages[i].X = curState.x;
                        innerLeftImages[i].Y = curState.y;
                        innerLeftImages[i].Zoom = curState.zoomLevel;
                        innerLeftImages[i].ActionHistory = curState.actionHistory;

                    }
                }
                $("input[name$='json_session_image_cardinside_left']").val(JSON.stringify(innerLeftImages));

                for (var i = 0; i < innerRightImages.length; i++) {
                    curState = this.getCurrentStatus(innerRightImages[i].DragId);
                    if (curState) {
                        innerRightImages[i].X = curState.x;
                        innerRightImages[i].Y = curState.y;
                        innerRightImages[i].Zoom = curState.zoomLevel;
                        innerRightImages[i].ActionHistory = curState.actionHistory;
                    }
                }
                $("input[name$='json_session_image_cardinside_right']").val(JSON.stringify(innerRightImages));

                for (var i = 0; i < backImages.length; i++) {
                    curState = this.getCurrentStatus(backImages[i].DragId);
                    if (curState) {
                        backImages[i].X = curState.x;
                        backImages[i].Y = curState.y;
                        backImages[i].Zoom = curState.zoomLevel;
                        backImages[i].ActionHistory = curState.actionHistory;
                    }
                }
                $("input[name$='json_session_image_back']").val(JSON.stringify(backImages));
            },
            updateMessageLog: function (imageId, messages) {
                var imageArray = getCurrentPageImages();
                if (imageArray instanceof Array) {
                    for (var i = 0; i < imageArray.length; i++) {
                        if (imageArray[i].ImageId == imageId) {
                            imageArray[i].MessageLog = messages;
                            break;
                        }
                    }
                }

                setCurrentPageImages(imageArray);
            },
            initializePage: function() {
                initializeCurrentPage();
            },
            initializeImage: function (imageId) {
                reapplyActionListForGivenImage(imageId);
            },     
            initializeCurrentPageImages: function(imageArray) {
                setCurrentPageImages(imageArray);
            },           
            publicProperty: 'test'
        };
    }

    return {
        getInstance: function() {
            if (!instantiated) {
                instantiated = init();
            }
            return instantiated;
        }
    };
})();


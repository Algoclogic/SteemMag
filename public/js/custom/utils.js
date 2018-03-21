function getTrendingPosts() {
    var trendingTags = [
        "life",
        "photography",
        "steemit",
        "kr",
        "busy",
        "blog",
        "zappl",
        "esteem",
        "introduceyourself",
        "travel",
        "bitcoin",
        "spanish",
        "steem",
        "nature",
        "cryptocurrency",
        "story",
        "funny",
        "indonesia",
        "food",
        "dmania",
        "news",
        "aceh",
        "dlive",
        "writing",
        "contest",
        "photo",
        "dtube",
        "money",
        "meme",
        "love",
        "music",
        "crypto",
        "health",
        "utopian-io",
        "poetry",
        "cn",
        "cervantes",
        "video",
        "blockchain",
        "colorchallenge",
        "steepshot",
        "deutsch",
        "kr-newbie",
        "sbdtothemoon",
        "new",
        "philippines",
        "science",
        "dsound"
    ];

    var blacklistedTags = [
        "nsfw"
    ];

    var excludedTags = [
        "blog",
        "zappl",
        "introduceyourself",
        "story",
        "funny",
        "aceh",
        "writing",
        "photo",
        "meme",
        "love",
        "poetry",
        "cervantes",
        "steepshot",
        "sbdtothemoon",
        "new"
    ];

    var localeTags = [
        "kr",
        "spanish",
        "indonesia",
        "cn",
        "kr-newbie",
        "philippines",
        "deutsch"
    ];

    var platformTags = [
        "steemit",
        "busy",
        "esteem",
        "dmania",
        "dlive",
        "dtube",
        "utopian-io",
        "dsound"
    ];

    var videoTags = [
        "dlive",
        "dtube",
        "video"
    ];

    var audioTags = [
        "dsound"
    ];

    var contestTags = [
        "contest",
        "colorchallenge"
    ];

    var magazineTags = Array();
    $(trendingTags).each(function (i) {
        if (!($.inArray(trendingTags[i], blacklistedTags) > -1 || $.inArray(trendingTags[i], localeTags) > -1 || $.inArray(trendingTags[i], excludedTags) > -1 || $.inArray(trendingTags[i], platformTags) > -1 || $.inArray(trendingTags[i], videoTags) > -1 || $.inArray(trendingTags[i], audioTags) > -1 || $.inArray(trendingTags[i], contestTags) > -1)) {
            magazineTags.push(trendingTags[i]);
        }

    });

    console.log(magazineTags);

    // $(magazineTags).each(function (i) {
    getTrendingDiscussions(magazineTags[0], magazineTags);
    console.log("hiiiiiiiiiiii");


}

    var posts = Array();
    function getTrendingDiscussions(tag, magazineTags) {
        var limit = 40;
        if(tag === 'life' || tag === 'cryptocurrency' || tag === 'food'){limit = 100;}

        steem.api.getDiscussionsByTrending({limit: limit, tag: tag}, function (err, result) {

            if (err) {
                handleError(err);
            }

            else {
                handleResponse(result, tag, magazineTags);
                if(tag === 'life' || tag === 'cryptocurrency' || tag === 'food'){handleCategoryResponse(result, tag, magazineTags);}
            }
        });
    }


    function handleResponse(result, tag, magazineTags) {
        $(result).each(function (i) {
            if (result[i].category === tag) {
                if((JSON.parse(result[i].json_metadata)).video !== undefined){return true}
                posts.push(result[i]);
                standardize(result[i], magazineTags);
                return false;
            }
        });
        if($.inArray(tag,magazineTags) > -1 && $.inArray(tag,magazineTags) < magazineTags.length-1){
            getTrendingDiscussions(magazineTags[$.inArray(tag,magazineTags)+1], magazineTags);
        }

    }

    function handleCategoryResponse(result, tag, magazineTags) {
        var j=0;
        $(result).each(function (i) {
            if (result[i].category === tag) {
                if((JSON.parse(result[i].json_metadata)).video !== undefined){return true}
                standardizeCategory(result[i], j+1);
                j++;
                if(j > 5){return false;}
            }
        });

        // if($.inArray(tag,magazineTags) > -1 && $.inArray(tag,magazineTags) < magazineTags.length-1){
        //     getTrendingDiscussions(magazineTags[$.inArray(tag,magazineTags)+1], magazineTags);
        // }

    }

    function standardize(post, magazineTags) {
        console.log(post);
        var meta = JSON.parse(post.json_metadata);
        var postObj = {
            id: $.inArray(post.category,magazineTags)+1,
            category: (post.category).toUpperCase(),
            image: (meta.image)[0],
            publishedAt: post.created,
            title: post.title,
            body: post.body
        };
        console.log(magazineTags);

        console.log(postObj.id);
            if(postObj.id === 1 || postObj.id === 2){
                if((postObj.title).length > 70){
                    postObj.title = (postObj.title).substr(0,70)+'. . .'
                }
            }else if(postObj.id < 7){
                if((postObj.title).length > 35){
                    postObj.title = (postObj.title).substr(0,35)+'. . .'
                }
            }else{
                if((postObj.title).length > 25){
                    postObj.title = (postObj.title).substr(0,25)+'. . .'
                }
            }

        assignToHtml(postObj)
    }

    function standardizeCategory(post, index) {
        console.log(post);
        var meta = JSON.parse(post.json_metadata);
        var id;
        if(post.category === 'life'){
            id = '1-'
        }else if(post.category === 'cryptocurrency'){
            id = '2-'
        }else if(post.category === 'food'){
            id = '3-'
        }
        var postObj = {
            id: id+index,
            category: (post.category).toUpperCase(),
            image: (meta.image)[0],
            publishedAt: post.created,
            title: post.title,
            body: post.body
        };
        if(postObj.id === '1-1' || postObj.id === '2-1' || postObj.id === '3-1'){
            if((postObj.title).length > 20){
                postObj.title = (postObj.title).substr(0,20)+'. . .'
            }
            if((postObj.body).length > 90){
                postObj.body = (postObj.body).substr(0,90)+'. . .'
            }
        }else if(postObj.id < 7){
            if((postObj.title).length > 40){
                postObj.title = (postObj.title).substr(0,40)+'. . .'
            }
        }else{
            if((postObj.title).length > 40){
                postObj.title = (postObj.title).substr(0,40)+'. . .'
            }
        }

        assignToCategoryHtml(postObj)
    }

    function assignToHtml(postObj) {
        var article = "#article-"+postObj.id;
        $(article).find('a img').attr('src',postObj.image);                 //Post Image
        $(article).find('div div div h2 a').text(postObj.title);                //Post Title
        if(postObj.id === 1 || postObj.id === 2) {
            $(article).find('div div span').html('<i class="fa fa-clock-o"></i>');                //Post Publishing Time
            $(article).find('div div span').append( postObj.publishedAt);                //Post Publishing Time
        }
        $('#label-'+postObj.id).text(postObj.category);         //Post Category
    }

    function assignToCategoryHtml(postObj) {
        var article = "#cat-"+postObj.id;
        if(postObj.id === '1-1' || postObj.id === '2-1' || postObj.id === '3-1'){
            $(article).find('img').attr('src',postObj.image);                 //Post Image
            $(article).find('div span.post-date').append( postObj.publishedAt);
            $(article).find('div span.post-category').append(postObj.category);                //Post Publishing Time
            $(article).find('div p').append(postObj.body);                //Post Body Snippet

        }
        $(article).find('div h3 a').text(postObj.title);                //Post Title
    }



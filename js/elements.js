
function create_navbar()
{
    var x = document.getElementById("main_text");
    var main_subject = x.getElementsByTagName("h2");
    var subsubject = x.getElementsByTagName("h3");

    
    var subjects = ["Início","Internet","subsubjects", "Atrasos na rede", "end", "Camada de aplicação", "subsubjects", "Protocolos", "TCP", "end", "Contactos"];
    var url_subjects = ["index.html","atrasos_na_rede.html","protocolos.html", "tcp.html", "contactos.html"];

    var text = "<hr><ul>";
    var j = 0;
    var sub = 0;

    for (var i = 0; i < subjects.length ;i++) 
    {
    if(subjects[i+1] == "subsubjects")
    {
        text += '<li class="dropdown"> <a ';
        if(main_subject == subjects[i]) text += 'class="active"';
        text += 'href="javascript:void(0)" class="dropbtn">' + subjects[i] + '</a>';
        text += '<div class="dropdown-content">';
        i++;
        sub = 1;
    }
    else if(subjects[i] == "end")
    {
        sub = 0;
        text += '</div></li>';
    }
    else if(sub)
    {
        text +='<a';
        if(subsubject == subjects[i]) text += 'class="active"';
        
        text += ' href="' + url_subjects[j++] + '">' + subjects[i] +'</a>';
    }
    else if(subjects[i] != "end")
    {
        //text += '<li <a ';
        //if(main_subject == subjects[i]) text += 'class="active"';
        text += '<li <a class="active href="' + url_subjects[j++] + '">' + subjects[i] +'</a></li>';
    }
    }
    text += "<hr></ul>";

    document.getElementById("navbar").innerHTML = text;
}

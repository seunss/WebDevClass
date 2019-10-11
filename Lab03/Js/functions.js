function Book( isbn, title, description ,universities){
    this.isbn = isbn;
    this.title = title;
    this.description = description;
    this.universities = universities;

    

}
Book.prototype.outputCard = function(){

    var html = `<div class="mdl-cell mdl-card mdl-shadow--2dp">
                <div class="mdl-card__media">
                    <img  src="images/${this.isbn}.jpg" title="${this.title}">
                </div>                
                <div class="mdl-card__supporting-text">
                   <p>${this.title}</p>
                    <h6>Adopters</h6>            
                    <ul>
                    ${listHTML(this.universities)}
                    </ul>        
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button">READ MORE</a>          
                </div>          
            </div>   <!-- end card -->`;
    
        document.write(html);
        console.log(html);

 }

 function listHTML(list){
     var list ='';
     for(let i = 0;i < list.length; i++){
         list += '<li>${list[i]}</li>';
     }
 }

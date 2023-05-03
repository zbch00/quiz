const getThemes = () => {
    return fetch('http://127.0.0.1:8000/api/themes')//fetch renvoie une promesse (resultat en json ou une erreur

        .then(response => {
            if (response.ok) {
                return response.json()
            }
            throw new Error('une erreur est survenu, vérifiez votre endpoint')
        })


}
// je vais rendre disponible cette fonction dans d'autres modules

getThemes()
    .then(result => displayThemes(result))
    .catch(error => console.log(error))

const sectionChoisirTheme = document.querySelector('#ChoisirLeTheme')
const sectionNb_Questions = document.querySelector('#Nb_Questions')
const BtnCommencer = document.querySelector('#BtnCommencer')
const sectionQuestions = document.querySelector('#Questions')
const sectionQuestionsIntitule = document.querySelector('#QuestionsIntitule')
const sectionReponses = document.querySelector('#Reponses')
//const sectionNext = document.querySelector('#next')
let Theme
let NbDeQuestion
let reponsesArray = []
let reponses = '';


const displayThemes = (themes) => {

    const div = document.querySelector('#Choisir')


    themes.forEach(theme => {
        const p_theme = document.createElement('button');
        p_theme.textContent = theme.libelle
        p_theme.classList.add("shadowfort", "alert", "alert-success", "m-3", "rounded-pill", "bg-gradient", "border-solid", "border-success", "text-success", "opacity-75", "col-10", 'col-lg-4', 'col-xl-3','h4')
        div.appendChild(p_theme)
        p_theme.addEventListener("click", function () {
            Theme = this.textContent;
            if (Theme) {
                sectionNb_Questions.classList.remove('displayNone')
                sectionChoisirTheme.classList.add('displayNone')
            }
        })
    })
}

BtnCommencer.addEventListener("click", function () {
    NbDeQuestion = document.getElementById('NombreInput').value
    if (NbDeQuestion > 0) {
        sectionNb_Questions.classList.add('displayNone')
        sectionQuestions.classList.remove('displayNone')
    } else if(NbDeQuestion < 0){
        NbDeQuestion =NbDeQuestion*(-1)
        sectionNb_Questions.classList.add('displayNone')
        sectionQuestions.classList.remove('displayNone')
    }
    else {
        NbDeQuestion=null
        sectionNb_Questions.classList.add('displayNone')
        sectionChoisirTheme.classList.remove('displayNone')
    }
    if (NbDeQuestion && Theme) {

        const getQuestions = () => {
            return fetch('http://127.0.0.1:8000/api/themes/' + Theme + '/' + NbDeQuestion)//fetch renvoie une promesse (resultat en json ou une erreur

                .then(response => {
                    if (response.ok) {
                        return response.json()
                    }
                    throw new Error('une erreur est survenu, vérifiez votre endpoint')
                })


        }
// je vais rendre disponible cette fonction dans d'autres modules

        getQuestions()
            .then(result => displayQuestions(result))
            .catch(error => console.log(error))





        const displayQuestions = (question) => {
            let bonneReponses = 0
            let i = 0
            let okReponse
            let nbQuestionsMax = question.length

            const displayNextQuestion = () => {
                if (i === nbQuestionsMax) {
                    NbDeQuestion=question.length;
                    displayResult(bonneReponses);
                } else {

                    const questionTitre = document.createElement('h1');
                    questionTitre.textContent = question[i].intitule;
                    questionTitre.classList.add(
                        'border-d',
                        'rounded-pill',
                        'd-flex',
                        'justify-content-center',
                        'text-success',
                        'mb-4'
                    );
                    sectionQuestionsIntitule.appendChild(questionTitre);
                    shuffle(question[i].reponse)
                    question[i].reponse.forEach((reponse) => {
                        okReponse = question[i].reponseCorrect;
                        const p_reponse = document.createElement('button');
                        p_reponse.textContent = reponse;
                        p_reponse.classList.add(
                            "shadowfort", "alert", "alert-success", "m-3", "rounded-pill", "bg-gradient", "border-solid", "border-success", "text-success", "opacity-75", "col-12", 'col-lg-3', 'col-xl-2','h4' );
                        sectionReponses.appendChild(p_reponse);


                        p_reponse.addEventListener('click', function () {

                            reponseDonne = this.textContent;
                            const bonneReponse = question[i].reponseCorrect || "non défini";
                            reponses = `À la question : "${question[i].intitule}", vous avez répondu : "${reponseDonne}".\n`;
                            let reponses2 = `La bonne réponse était : "${bonneReponse}".\n`;
                            reponsesArray.push(reponses)
                            reponsesArray.push(reponses2)

                            if (reponseDonne === question[i].reponseCorrect) {
                                bonneReponses++;
                                this.style.color = "green"; // Ajouter la classe CSS 'correct' si la réponse est correcte
                            } else {
                                this.classList.add('incorrect'); // Ajouter la classe CSS 'incorrect' si la réponse est incorrecte


                            }
                            i++;
                            sectionQuestionsIntitule.innerHTML = '';
                            sectionReponses.innerHTML = '';
                            if (i < NbDeQuestion) {
                                displayNextQuestion();

                            } else {
                                displayResult(bonneReponses);

                            }





                        });
                    }
                    );

                }

            };

            displayNextQuestion();

        };
    }
})

const displayResult = (bonneReponses) =>{
    // afficher le score final ici


//sectionNext.classList.add('displayNone')
    const result = document.createElement('h1');
    result.textContent = `Vous avez ${bonneReponses} bonne(s) réponse(s) sur ${NbDeQuestion} questions`
    result.classList.add("border-d", "rounded-pill", "d-flex", "justify-content-center", "text-success", "mb-4")
    sectionQuestionsIntitule.appendChild(result)
    const refreshButton = document.createElement('button');
    refreshButton.textContent = 'Recommencer ?';
    refreshButton.classList.add("shadowfort", "alert", "alert-success", "m-3", "rounded-pill", "bg-gradient", "border-solid", "border-success", "text-success", "opacity-75", "col-12", 'col-lg-3', 'col-xl-2','h4','d-flex', 'justify-content-center','mx-auto');
    refreshButton.addEventListener('click', () => {
        location.reload();
    });
    sectionQuestionsIntitule.appendChild(refreshButton);
    const ReponsesDiv = document.getElementById('Reponses');

    reponsesArray.forEach(repArray => {
        const divRep = document.createElement('h4');
        divRep.textContent = repArray;
        ReponsesDiv.appendChild(divRep);
    });

}




function shuffle(array) {
    array.sort(() => Math.random() - 0.5);
}

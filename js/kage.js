export default class Kage{
    constructor() {
    }

    skalKimGiveKage(erKimKommetForSent){
        return new Promise((resolve, reject) =>{

            setTimeout(() => {
                if(erKimKommetForSent){
                    resolve('Kim giver kage!');
                } else{
                    reject('Ingen kage i dag!');
                }
            }, 2000);

        });
    }

    erDetEnStorKage(size){
        return new Promise((resolve, reject) => {
            setTimeout(() => {

                if(size === 'small'){
                    reject('Nej, det er en lille kage!');
                } else if(size === 'medium'){
                    reject('Nej, det er en en almindelig kage!');
                } else{
                    resolve('Ja for fanden, det er det!');
                }
            }, 2000);
        });
    };

}
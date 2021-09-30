
export default class Music {
    constructor(){
        this.data = {
            password: "SuperSecretPassword1234"
        }

        this.rootElem = document.querySelector('.music');
        this.filter = this.rootElem.querySelector('.filter');
        this.items = this.rootElem.querySelector('.items');

        this.titleSearch = this.filter.querySelector('.titleSearch')
        this.authorSearch = this.filter.querySelector('.authorSearch')
        this.genreSearch = this.filter.querySelector('.genreSearch')
        this.subSearch = this.filter.querySelector('.subSearch')
    }

    async init(){
        this.titleSearch.addEventListener('input', () => {
            this.render();
        })
        this.authorSearch.addEventListener('input', () => {
            this.render();
        })
        this.genreSearch.addEventListener('input', () => {
            this.render();
        })
        this.subSearch.addEventListener('input', () => {
            this.render();
        })

        await this.render();
    }

    async render(){
        const data = await this.getData();

        const row = document.createElement('div');
        row.classList.add('row', 'g-4');

        for(const item of data) {
            const col = document.createElement('div');
            col.classList.add('col-md-6', 'col-lg-4', 'col-xl-3');


            col.innerHTML = `
                <div class="card border-0">
                    ${(item.musicArt) ? `<img class="card-img-top" src="uploads/${item.musicArt}">` : `<img class="card-img-top" src="uploads/noArt.jpg">`}
                    <h5 class="text-center cardd-title">${item.musicTitle}</h5>
                    <p class="pb-2 card-text">Composed by ${item.musicAuthor}</p>
                    <a href="music.php?musicID=${item.musicID}" class="btn btn-primary text-white w-100">Learn more</a>
                </div>
            `;

            row.appendChild(col);
        }

        this.items.innerHTML = '';
        this.items.appendChild(row);

    }

    async getData(){
        console.log(this.subSearch.value)
        this.data.titleSearch = this.titleSearch.value;
        this.data.authorSearch = this.authorSearch.value;
        this.data.genreSearch = this.genreSearch.value;
        this.data.subSearch = this.subSearch.value;

        const response = await fetch('api.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();
    }
}

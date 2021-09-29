export default class Music {
    constructor(){
        this.data = {
            password: "SuperSecretPassword1234"
        }

        this.rootElem = document.querySelector('.music');
        this.filter = this.rootElem.querySelector('.filter');
        this.items = this.rootElem.querySelector('.items');
    }

    async init(){
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
                <div class="card">
                    <img src="uploads/${item.musicArt}" class="card-img-top">
                </div>
            `;

            row.appendChild(col);
        }

        this.items.appendChild(row);

    }

    async getData(){
        const response = await fetch('api.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();
    }
}
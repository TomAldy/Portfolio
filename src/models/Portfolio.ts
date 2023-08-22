export default class Portfolio {
    image?: string;
    link?: string;

    constructor(data: Pick<Portfolio, "image" | "link"> | null = null) {
        if(data != null) {
            this.image = data.image;
            this.link = data.link;
        }

    }
}
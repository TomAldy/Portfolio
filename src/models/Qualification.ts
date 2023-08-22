export default class Qualification {
    title?: string;
    time?: string;
    description?: string;
    grade?: string;

    constructor(data: Pick<Qualification, "title" | "time" | "description" | "grade"> | null = null) {
        if(data != null) {
            this.title = data.title;
            this.time = data.time;
            this.description = data.description;
            this.grade = data.grade;
        }

    }
}
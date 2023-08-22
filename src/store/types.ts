import Portfolio from "@/models/Portfolio";
import Qualification from "@/models/Qualification";

export interface RootState {
    darkMode: boolean,
    portfolio: Array<Portfolio>,
    qualifications: Array<Qualification>
}
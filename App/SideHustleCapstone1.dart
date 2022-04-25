
// importing dart:io file
import 'dart:io';
main(){
    grade();
}
void grade(){

    print("Enter subject: ");
    String? subject = stdin.readLineSync();

    print("Enter score: ");
    int? score = int.parse(stdin.readLineSync()!);
    if (score >= 80 && score <= 100) {
        print("Your Score for ${subject} is A");
    } 
    else if (score >=60 && score <= 79) {
        print("Your Score for ${subject} is B");
    } 
    else if (score >= 50 && score <= 59) {
        print("Your Score for ${subject} is C");
    } 
    else if (score >= 40 && score <= 49) {
        print("Your Score for ${subject} is D");
    } 
    else if(score >= 0 && score < 40){
        print("Your Score for ${subject} is F");
    }
    else{
        print("Invalid Score");
    }
}




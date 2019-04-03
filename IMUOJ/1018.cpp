#include<iostream>;
using namespace std;
int main()
{
	int score;
	char grade;
	cin >> score;
	if (score >= 90) grade = 'A';
	else if ((score >= 80) && (score < 90)) grade = 'B';
	else if ((score >= 70) && (score < 80)) grade = 'C';
	else if ((score >= 60) && (score < 70)) grade = 'D';
	else grade = 'E';
	cout<<grade<<endl;
	//cin.get();
	//cin.get();
	return 0;
}
#include<iostream>
#include<string>
using namespace std;
struct data
{
	string id;
	string name;
	double score;
};
int main()
{
	struct data student[200];
	int n, line;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> student[i].id >> student[i].name >> student[i].score;
	}
	cin >> line;
	for (int i = 0; i < n; i++)
	{
		if (student[i].score >= line)
		{
			cout << student[i].id << " " << student[i].name << " " << student[i].score << endl;
		}
	}
}
#include<iostream>
#include<string>
using namespace std;
struct student
{
	int num;
	string name;
};
int main()
{
	struct student *p;
	int n;
	cin >> n;
	p = new struct student[n];
	for (int i = 0; i < n; i++)
	{
		cin >> p[i].num >> p[i].name;
	}
	for (int i = 0; i < n-1; i++)
	{
		for (int j = 0; j < n-1-i; j++)
		{
			if (p[j].name > p[j + 1].name) swap(p[j], p[j + 1]);
		}
	}
	for (int i = 0; i < n; i++)
	{
		cout << p[i].num << " " << p[i].name << endl;
	}
}
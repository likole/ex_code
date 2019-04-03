#include<iostream>
#include<string>
using namespace std;
struct students
{
	string name;
	int age;
	string sex;
};
int main()
{
	struct students *a;
	int n;
	cin >> n;
	a = new struct students[n];
	for (int i = 0; i < n; i++)
	{
		cin >> a[i].name >> a[i].age >> a[i].sex;
	}
	for (int i = 0; i < n-1; i++)
	{
		for (int j = 0; j < n-1-i; j++)
		{
			if (a[j].age > a[j + 1].age) swap(a[j], a[j + 1]);
		}
	}
	for (int i = 0; i < n; i++)
	{
		cout << a[i].name <<" "<< a[i].age <<" "<< a[i].sex << endl;
	}
}
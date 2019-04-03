#include<iostream>
#include<string>
using namespace std;
struct student 
{
	int id;
	string name;
	int age;
};
int main()
{
	int n;
	cin >> n;
	struct student *a = new struct student[n];
	for (int i = 0; i < n; i++)
	{
		cin >> a[i].id >> a[i].name >> a[i].age;
	}
	int c_id, c_age;
	string c_name;
	cin >> c_id >> c_name >> c_age;
	for (int i = 0; i < n; i++)
	{
		if (a[i].id == c_id)
		{
			a[i].name = c_name;
			a[i].age = c_age;
		}
	}
	for (int i = 0; i < n; i++)
	{
		cout << a[i].id << " " << a[i].name << " " << a[i].age << endl;
	}
}
#include<iostream>
#include<string>
using namespace std;
#include<list>
struct student
{
	int id;
	string name;
	int age;
public:
	student()
	{
		cin >> id >> name >> age;
	}
};
int main()
{
	list <struct student> students;
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		struct student newstudent;
		students.push_back(newstudent);
	}
	int age;
	cin >> age;
	for (list<struct student>::iterator it = students.begin(); it != students.end(); )
	{
		if (it->age == age) students.erase(it++);
		else it++;
	}
	for (list<struct student>::iterator it = students.begin(); it != students.end(); it++)
	{
		cout << it->id << " " << it->name << " " << it->age << endl;
	}
}
#include <iostream>
#include <cstring>
using namespace std;
class student
{
	char name[10];
	int id;
public:
	student() { strcpy(name, ""); id = 0; }
	char * getname() { return name; }
	friend istream& operator>>(istream&input, student &obj);
	friend ostream& operator<<(ostream&output, student &obj);
};
istream& operator>>(istream&input, student &obj)
{
	input >> obj.id >> obj.name;
	return input;
}
ostream& operator<<(ostream&output, student &obj)
{
	output << obj.id << " " << obj.name;
	return output;
}
class student_array
{
	student *a;
	int num;
public:
	student_array(int i = 0) { a = new student[i]; num = i; }
	void input()
	{
		for (int j = 0; j<num; j++)
			cin >> a[j];
	}
	void sort()
	{

		for (int i = 0; i<num; i++)
			for (int j = 0; j<num - 1; j++)
				if (strcmp(a[j].getname(), a[j + 1].getname())>0)
				{
					swap(a[j],a[j+1]);
				}
	}
	void show()
	{
		for (int i = 0; i<num; i++)
			cout << a[i] << endl;
	}
};
int main()
{
	int k;
	cin >> k;
	student_array m(k);
	m.input();
	m.sort();
	m.show();
}

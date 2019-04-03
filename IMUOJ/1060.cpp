#include<iostream>
#include<string>
using namespace std;
struct data
{
	string id;
	string name;
	int grade1, grade2, grade3;
};
void input(struct data*);
void print(struct data*);
int main()
{
	int n;
	struct data slog;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		input(&slog);
		print(&slog);
	}
	//cin.get(); cin.get();
	return 0;
}
void input(struct data *x)
{
	cin >> x->id >> x->name >> x->grade1 >> x->grade2 >> x->grade3;
}
void print(struct data *x)
{
	cout << x->id << "," << x->name << "," << x->grade1 << "," << x->grade2 << "," << x->grade3 << endl;
}